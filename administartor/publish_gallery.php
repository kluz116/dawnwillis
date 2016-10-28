<?php

     require 'connect.php'; 

       $id = $_GET['id'];
       
       	try{
	
		 $date =$dbh->prepare("update files set status='1' where id ='".$id."'");
		 $res=$date->execute();
		 if ($res) {
		 	header("Location: gallery_images.php");
		 }

		}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}

?>