<?php
	class email
	{
		function send($to,$sub,$message)
		{
			// echo 'to'.$to;
			// echo "<br>";
			// echo 'sub'.$sub;
			// echo "<br>";
			// echo 'msg'.$message;
			// echo "<br>";

			
			// $headers.="MIME-Version: 1.0\r\n";
			// if($html)
			// {
				// $headers .="Content-Type: text/html; charset=UTF-8\r\n";
				
				
					echo $headers ="From: atikamomin97@gmail.com";
					return mail();


				

			// }
		}
	

	function Sendmail($to,$sub,$message)
	{


		require_once "E:\\xampp\\htdocs\\phppractice\\intership\\Registration\\PHPMailer\\PHPMailerAutoload.php";
		$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gamil.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'atikamomin97@gamil.com';                 // SMTP username
			$mail->Password = '8697h@nif@#Atika';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('atikamomin97@gmail.com', 'Mailer');
			$mail->addAddress($to);     // Add a recipient
			// $mail->addAddress('ellen@example.com');               // Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');	
			
				}
			}


?>