<?php
	try {
	  $dbh = new PDO("mysql:host=localhost;dbname=dawnwillisministries", 'root','');
	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}