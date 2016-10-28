<?php

 require 'administartor/config.inc.php'; 
 require 'administartor/connect.php'; 

 $date =$dbh->prepare('select * from contents where category ="Daily Scripture" order by id desc');
 $date->execute();
 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

 	$content = $row['content'];
 	echo json_encode($content);
 }