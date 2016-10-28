<?php

    require 'connect.php'; 

       $id = $_GET['id'];
       
       	try{
	
		 $date =$dbh->prepare("update contents set status='0' where id ='".$id."'");
		 $res=$date->execute();
		 if ($res) {
		 	header("Location: scriptures.php");
		 }

		}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}

?>