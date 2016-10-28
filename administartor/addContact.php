<?php

   require 'connect.php'; 

	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
	    $message = $_POST['message'];
	   

			if (!empty($name) && !empty($email) && !empty($message)) {
		   $dataa = $dbh->prepare('insert into contact(name,email,message)values(:name,:email,:message)');

			$dataa->bindParam(':name',$name);
			$dataa->bindParam(':email',$email);
			$dataa->bindParam(':message',$message);
			$res = $dataa->execute();
			if ($res) {
				echo "Successfuly Sent Message";
			}
		
	}else{
		echo "Fill In Name, Email Or Message";
	}
	}




?>