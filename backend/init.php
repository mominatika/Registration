<?php

include(__DIR__."/Class/session.php");
include(__DIR__."/Class/database.php");
include (__DIR__."/Class/email.php");

class app{
		
			public $session=null;
			public $db =null;

			function __construct()
			{
				$this->initDB();
				$this->initSession();


			}

		public function getInput($action,$default=null)
		{
				if(isset($_REQUEST[$action]))	
				{
					return trim($_REQUEST[$action]);
				}	
				else
				{
					return $default;
				}
		} 

		private function initDB()
		{

			if(is_null($this->session))
			
				$this->session=new session();
				$this->db=new database($this->session);
			

		}
		private function initSession()
		{
			$this->session=new session();

		}
		public function redirect($url="",$msg="")
		{
			header("location:".$url);
			$err=array();
			if(isset($msg))
			{
				$err[]=$msg;
			}

			 // $this->err_message($err);
			 // $this->session->set("message",array("type"=>"danger","message"=>implode("<br/>",$err)));


			


		}
		public function getEmail()
		{
			return new email();
			
		}
		public function getMessages()
		{
			 $msg =$this->session->get("message");
			 // print_r($msg);
			 $msg2 =[];
			 if(isset($msg['type']))
			 {
			 	$msg2[] = $msg;

			 }
			 else
			 {
			 	$msg2 =$msg;

			 }
			 $errorHtml = '';
			 if($msg2)
			 {
			 	foreach ($msg2 as $m){
			 		if($m['message']){
				 		$errorHtml .= '<div class="alert alert-'.$msg['type'].'">'.$m['message'].'</div>';
			 		}

			 	}
			 }
			 return $errorHtml;

		}
		public function err_message($err)
		{
			 return $this->session->set("message",array("type"=>"danger","message"=>implode("<br/>",$err)));
            
		}
		public function EmailValid($email)
		{
			$email_pattern ="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
									if(preg_match($email_pattern, $email))
									{
											return true;

									}
									
		}
	

		

}
$app= new app();
?>