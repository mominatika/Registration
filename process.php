<?php
require_once "backend/init.php";

$action=$app->getInput('action',"none");
echo $action;
echo "<br>";
	


switch ($action) {
	case 'logout':
				$app->session->destroy();
				$app->redirect("login.php");

		break;
	
	case 'login':
				 $l_username = $app->getInput("user_name","false");
				 $l_pwd=$app->getInput("password","false");
				$err=array();
				if($l_username != "" &&  $l_pwd != "")
				{

					if($l_username != "")
					{
						if (filter_var($l_username, FILTER_VALIDATE_EMAIL)) 
			                {	
			                	$email=$app->EmailValid($l_username);
			                   	if(!$email)
			                   	{
			                   		$err[]="invalid Email Id";
			                   	}
			                }
			               	
					}
					 if(strlen($l_pwd)<=4)
					 {
					 	$err[]="password:minimum 4 character is required";

					 }
					 if(count($err)==0 && $l_username == true)
					 {
					 	$select = $app->db->select("user_master","uname=".$app->db->escapeValue($l_username). " AND `password`=".$app->db->escapeValue(md5($l_pwd)));
						$result=$select->fetch_assoc();
						$num =$select->num_rows> 0;
						if($num)
						{
							// print_r($result);
							$result=$app->db->select("user_master","uname=".$app->db->escapeValue($l_username). " AND `password`=".$app->db->escapeValue(md5($l_pwd))."AND `status`=".$app->db->escapeValue('Active'));
							$value=$result->fetch_assoc();
							$active_num=$result->num_rows>0;
							if($active_num)
							{
									// print_r($value);
								 $user_id=$value['id'];
								// echo $result[];
								$app->session->set("user",$value);
								// print_r($app->db->getUser());
								$app->redirect("home.php");

							}
							else
							{
								$err[]="your Email is not Verified";
							}
						}
						else{
							$err[]="Email Id OR Password is Incorrect";
						}
					 }
					
				}
				else{
					$err[] = "email Id And Password Is required"; 
				}
					if(count($err) >0)
					{
						 $app->session->set("message",array("type"=>"danger","message"=>implode("<br/>",$err)));
	        		 	$app->redirect("login.php");
						// $app->err_message($err);
						// $app->redirect('login.php');
					}

			break;

		case 'register':
				 $user=$app->getInput("user_name",false);
        echo $pwd=$app->getInput("password","");
        
        $name=$app->getInput("name",false);
        
        	$err = array();

        	if(empty($user) && empty($user_name) && empty($pwd))
        	{
        		$err[]="all field is required";

        		
        	}
        	else
        	{


        		
        		if($name != "")
        		{
        			echo $name;
        		}
        		else
        		{
        			$err[] ="Name is required";
        		}

        		if(strlen($pwd)<=0)
        		{
        			$err[]="Passwoed:minimum 6 character required";
        		}
        		if($user != "")
        		{
						 	if (filter_var($user, FILTER_VALIDATE_EMAIL)) 
			                {	
			                	$email=$app->EmailValid($user);
			                   	if(!$email)
			                   	{
			                   		$err[]="invalid Email Id";
			                   	}
			                }			
        		}
        		else
        		{
        			$err[] ="EmailId is required";
        			
        		}

        		if(count($err) == 0 AND $user == true)
        		{
        			$data=$app->db->select("user_master","uname=".$app->db->escapeValue($user));
        			$num =$data->num_rows>0;
	        		
        			if($num)
        			{

        				$err[] = "email is exist";
        			}
        			else
        			{
        				    $email_verify_Token=substr(md5(uniqid(rand(), true)), 16, 16);  
			                if($id=$app->db->insert("user_master",array("name"=>$name,"uname"=>$user,"password"=>md5($pwd),"etoken"=>$email_verify_Token,"status"=>"Inactive")))
			                {   
			                     $message="<p>Hi ".$name.",<br/>Please click on belo email verification link to verify your email.<br/><br/><a href=http://localhost/phppractice/intership/Registration/process.php?action=verify&token=".$email_verify_Token.">click here to Active your Account </p>";
			                    // var_dump($app->getEmail()->send($user,"Testing  Email Verification",$message));
			                    // echo $user;
			                     die($message);

			                    // if($app->getEmail()->Sendmail($user,"Testing  Email Verification",$message))
			                    // {


			                    // }
			                    // else
			                    // {
			                    //  echo 0;
			                    // }
			                    // $app->redirect("register.php");
			                }

        				
        			}


        		}

        		
        	}
        	if(count($err)>0)
        	{
        		 $app->session->set("message",array("type"=>"danger","message"=>implode("<br/>",$err)));
        		 $app->redirect("register.php");

        	}



				

			break;

		case "verify":


		$token=$_GET['token'];
		$result=$app->db->select("user_master","etoken=".$app->db->escapeValue($token));
		$fetch=$result->fetch_array();
		$num=$result->num_rows >0;
		if($num)
		{
			echo "<br>";
			echo $fetch['id'];
			$Active=$app->db->select("user_master","etoken=".$app->db->escapeValue($token) ."AND `status`=".$app->db->escapeValue('Active')." AND id=".$fetch['id']);
			$num=$Active->num_rows>0;
			if($num)
			{

				$app->redirect('login.php',"your EmailId is already verified");

			}
			else
			{
			$update = $app->db->update("user_master",array("etoken=".$app->db->escapeValue($token),"status=".$app->db->escapeValue('Active')),"id=".$fetch['id']);
			$app->session->set("message",array("type"=>"success","message"=>"Email verification successfully"));
			$app->redirect("login.php");
			}

			
		}
		else
		{
			echo 0;
		}


		

		// echo "verify Email Id";

}

?>