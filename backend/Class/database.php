<?php
include('config.php');
/**
 * 
 */
class database extends config
{
	
	public $conn =null;
	public $session = null;

	function __construct($session=null)
	{

		$this->connect();
		$this->session=$session;
	}

	function connect()
	{
		$this->conn = new mysqli($this->host,$this->user,$this->password,$this->db);

		if($this->conn->connect_errno)
		{
			throw new Exception($this->conn->connect_error);
			
		}
	

	}
	public function tableExist($table){

		 // return $this->db;
		$tablesInDb =$this->conn->query('SHOW TABLES FROM  `'.$this->db.'` LIKE "'.$table.'"');
		// print_r($tablesInDb);
		if($tablesInDb)
		{
			if($tablesInDb->num_rows == 1)
			{
				return true;
			}
			else{

					return false;

			}
		}
		
	}

	function select($table,$where_=null,$start=null,$limit=null)
	{
		if(!$this->tableExist($table))
		

			// echo "table is not exist";
			return false;
		

			// SELECT * FROM `user_master` WHERE 1
		$query="SELECT * FROM  $table ".(($where_ != null)?' WHERE ' .$where_:'');
		if($start != null && intval($start) && $limit != null && intval($limit))
		{
			$query .=" LIMIT $start , $limit";
		}

		if($this->result = $this->conn->query($this->last_query=$query))
		{
			return $this->result;
			// if($this->result)
			// {
			// 	$res=$this->result->fetch_assoc();
			// 	print_r($res);
			// }
			// else
			// {
			// 	echo 0;
			// }
		}
		

	}

	function escapeValue($data)
	{
		if(is_numeric($data))
		{
			return $this->conn->real_escape_string($data);

		}
		else{
			return "'".$this->conn->real_escape_string($data)."'";
		}
	}
		function insert($table,$insert_data)
		{
			if(!$this->tableExist($table)) 
			{
				return false;
			}
			else
			{

			try {
					// print_r($insert_data);
					// echo $table;
					// echo "<br>";
					 $columns = implode(",", array_keys($insert_data));
					// echo "<br>";
					// print_r($escaped_Values);
					$escaped_Values = array_map(array($this,'escapeValue'),array_values($insert_data));
					$values =implode(',',$escaped_Values);

					$insert = "INSERT INTO $table ($columns) VALUES ($values)";
					if($this->conn->query($this->last_query=$insert) === true)
					{
						// echo 1;
						return $this->last_insert_id=$this->conn->insert_id;
					}
					else
					{
						return false;
					}
			} catch (Exception $e) {
				throw (e);

			}
				}

		}


		function update($table,$value,$where){
			// echo "<br>".$table;
			// echo "<br>".$value;
			// print_r($value);
			// echo "<br>".$where;
			// echo "<br>";

			if(!$this->tableExist($table))
			{
				return false;
			}
			else
			{
					$arr=[];
					foreach ($value as $key => $v) {

						$name = $v;
						$arr[] = $name;
						// echo implode(",", $v)."<br>";
					}
					// print_r($arr);
					$update_val= implode(',', $arr);


					$where =(($where !="")?$where :"");
				 $update = "UPDATE $table SET $update_val WHERE $where";

				 $result = $this->conn->query($update);
				 if($result)
				 {
				 	return true;
				 }
				 else
				 {
				 	return fale;
				 }
			}

			// UPDATE `user_master` SET `id`=[value-1],`name`=[value-2],`uname`=[value-3],`password`=[value-4],`status`=[value-5],`etoken`=[value-6] WHERE 1
		}

			public function getUser($id=null)
			{
			 if($id==null){
			 // $user =$this->session::get('user');
			  $user=session::get('user');
			  


            if(isset($user['id']))
             	$id=$user['id'];
             else
             	echo false;

	        }

	       
	       	$res=$this->select("user_master","id=".$id);
	        if($res)
	        {
	        	return $res=$res->fetch_assoc();
	        }
	        else
	        {
	        	return false;
	        	// $res=false;
	        }
	        // return ($res && $res=$res->fetch_assoc())?$res:false;
   
    }
    		 function logout()
	        {
	        	echo "logout";

	        }
}



?>