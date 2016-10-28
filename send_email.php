<?php



                       require_once'PHPMailer/PHPMailerAutoload.php';
                        require_once("PHPMailer/class.phpmailer.php");//PHPMailer Object

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];


                        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message) ) {
                        	
                        	# code...
                        }


                        










?>