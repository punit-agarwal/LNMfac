<?php
	
	session_start();




	if(isset($_POST['Submit'])){

		if(isset($_POST['txtAppid']) && !empty($_POST['txtAppid'])){

			$email = $_POST['txtAppid'];
			$id = "@lnmiit.ac.in";
			if(strpos($email, $id) !== false){
				
				$otp = mt_rand(100000, 999999);

				$subject = "OTP";
				$message =  "Use this OTP to use to give Feedback " + $otp;

				if(mail($email, $subject, $message)){

					echo "<script type='text/javascript'>alert('OTP is generated to this Id');</script>";
				}else{
					echo "<script type='text/javascript'>alert('Server Down.. Try Later');</script>";
				}

			}else{
				echo "<script type='text/javascript'>alert('Use Lnmiit Id');</script>";
			}
			
		}else{
			echo "<script type='text/javascript'>alert('Enter Email-Id');</script>";
		}
	}	

?>