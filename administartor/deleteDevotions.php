<?php

      define('DB_SERVER', "localhost");
       define('DB_USER', "root");
       define('DB_PASSWORD', "");
       define('DB_DATABASE', "dawnwillisministries");
       define('DB_DRIVER', "mysql"); 

       $id = $_GET['id'];
       
       	try{
		 $connection = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);
	  	 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 $date =$connection->prepare("delete from contents where id =:id");
		 $date->bindParam(':id',$id);
		 $res=$date->execute();
		 if ($res) {
		 	header("Location: editDevotions.php");
		 }

		}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}

?>