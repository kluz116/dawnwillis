<?php
require'connection.php';
define('BASE_URL', 'http://www.dawnwillisministries.org');

session_start();


class Config extends Connection
{


public function loginUser()
{
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($username) && !empty($password)) {
			try{

		    $data =$this->dbh-> prepare('select * from userregister where password=:password and username=:username');
			$data->bindParam(':username',$username);
			$data->bindParam(':password',$password);
			$data->execute();

			$row = $data->fetch(PDO::FETCH_ASSOC);

			if($row){
				         $_SESSION['username'] = $username;
						if(isset($_SESSION['username'])){
                            header("Location:index.php");
                             exit();
						}else{
							 header("Location:login.php");
						}
			}else{
				echo "User Not Found.";
			}

			}catch(PDOException $e){
				trigger_error('Error: ' .$e->getMessage());
			}

		}else{

			echo "Fill In All Fields.";
		}
	}
}

 public function seeMore($mytext,$link,$var,$heading,$id)
   {
   	$chars = 90;  
    $mytext = substr($mytext,0,$chars);  
    $mytext = substr($mytext,0,strrpos($mytext,' '));  
    $mytext = $mytext."<a href='".BASE_URL."/$link/".$id."/".$heading.".html'>Read more &raquo;&raquo;</a>";  
     return $mytext; 
   }
public function addContent()
{
	

	if (isset($_POST['category']) && isset($_POST['content']) && isset($_POST['heading'])) {


		$category = $_POST['category'];
		$heading = $_POST['heading'];
	    $content = $_POST['content'];
	    $addedBy = $_POST['addedBy'];
	    $date = date("Y-m-d h:i");

			if (!empty($category) && !empty($content) && !empty($heading)) {
		   $dataa = $this->dbh->prepare('insert into contents(category,heading,content,date,addedBy)values(:category,:heading,:content,:date,:addedBy)');

			$dataa->bindParam(':category',$category);
			$dataa->bindParam(':heading',$heading);
			$dataa->bindParam(':content',$content);
			$dataa->bindParam(':date',$date);
			$dataa->bindParam(':addedBy',$addedBy);
			$res = $dataa->execute();
			if ($res) {
				echo "Successfuly added Content";
			}
		
	}else{
		echo "Fill In All Fields";
	}
	}


}

public function getImages()
{
	try{
		 $date =$this->dbh->prepare("SELECT * FROM files");
		 $date->execute();
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$image = $row['file_name'];
		 	echo $content;
		 
		 }
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function getGallery1()
{
	try{
		 $date =$this->dbh->prepare("SELECT * FROM files order by id limit 0,4");
		 $date->execute();
		 echo "<div class='row grid-space-20'>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$image = $row['file_name'];
		 	echo "<div class='col-xs-3'>";
		 	 echo "<div class='overlay-container'>";
		 	 echo "<img src='administartor/uploads/$image' alt=''>";
		 	    echo "<a href='administartor/uploads/$image' class='overlay-link small popup-img' title=''>";
				      echo"<i class='fa fa-plus'></i>";
			    echo"</a>";

	
		  echo "</div>";
		 echo "</div>";
		 }
		 echo "</div>";
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getGallery2()
{
	try{
		 $date =$this->dbh->prepare("SELECT * FROM files order by id limit 5,4");
		 $date->execute();
		 echo "<div class='row grid-space-20'>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$image = $row['file_name'];
		 	echo "<div class='col-xs-3'>";
		 	 echo "<div class='overlay-container'>";
		 	 echo "<img src='administartor/uploads/$image' alt=''>";
		 	    echo "<a href='administartor/uploads/$image' class='overlay-link small popup-img' title=''>";
				      echo"<i class='fa fa-plus'></i>";
			    echo"</a>";

	
		  echo "</div>";
		 echo "</div>";
		 }
		 echo "</div>";
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getGallery3()
{
	try{
		 $date =$this->dbh->prepare("SELECT * FROM files order by id limit 8,4");
		 $date->execute();
		 echo "<div class='row grid-space-20'>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$image = $row['file_name'];
		 	echo "<div class='col-xs-3'>";
		 	 echo "<div class='overlay-container'>";
		 	 echo "<img src='administartor/uploads/$image' alt=''>";
		 	    echo "<a href='administartor/uploads/$image' class='overlay-link small popup-img' title=''>";
				      echo"<i class='fa fa-plus'></i>";
			    echo"</a>";

	
		  echo "</div>";
		 echo "</div>";
		 }
		 echo "</div>";
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getGallery4()
{
	try{
		 $date =$this->dbh->prepare("SELECT * FROM files order by id limit 12,4");
		 $date->execute();
		 echo "<div class='row grid-space-20'>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$image = $row['file_name'];
		 	echo "<div class='col-xs-3'>";
		 	 echo "<div class='overlay-container'>";
		 	 echo "<img src='administartor/uploads/$image' alt=''>";
		 	    echo "<a href='administartor/uploads/$image' class='overlay-link small popup-img' title=''>";
				      echo"<i class='fa fa-plus'></i>";
			    echo"</a>";

	
		  echo "</div>";
		 echo "</div>";
		 }
		 echo "</div>";
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getEvent()
{
	try{
		 $date =$this->dbh->prepare("SELECT * FROM events order by id limit 1");
		 $date->execute();
		 echo "<div class='image-box shadow text-center mb-20'>";
		 echo "<div class='overlay-container'>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
		 	$image = $row['file_name'];
		 	echo "<img src='administartor/uploads/$image' alt=''>";
		 	 echo "<div class='overlay-top'>";
		 	 echo "<div class='text'>";
		     echo "</div>";
		     echo "</div>";
		     echo "<div class='overlay-bottom'>";
		     echo "</div>";
		
		 }
		  echo "</div>";
		 echo "</div>";
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function getUpcomingEvent()
{
	try{
		$content = 'Up Coming Event';
		 $date =$this->dbh->prepare("select * from contents where category ='Up Coming Event'");
		 $date->execute();
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$content = $row['content'];
		 	echo $content;
		 
		 }
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function getDevotions()
{
	try{

		 $date =$this->dbh->prepare("select * from contents where category ='Devotions' order by id desc limit 1");
		 $date->execute();
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$content = $row['content'];
		 	echo $content;
		 
		 }
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function getDevotionsList()
{
	try{

		 $date =$this->dbh->prepare("select * from contents where category ='Devotions' and status='1'  order by id desc limit 1,6");
		 $date->execute();
		 echo "<div class='separator-2'></div>";
		 
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$content = $row['content'];
		 	$heading =  $row['heading'];
		 	$datee =  $row['date'];
		 	$id =  $row['id'];

		 
		 		echo"<div class='media margin-clear'>";
		 			   
						echo"<div class='media-body'>";
							$headings = str_replace(' ', '-', $heading);
							echo"<h6 class='media-heading'><a href='".BASE_URL."/devotion_details/".$id."/".$headings.".html'>$heading</a></h6>";
							echo"<p class='small margin-clear'><i class='fa fa-calendar pr-10'></i>$datee</p>";
						echo"</div>";
					echo"<hr>";
				echo"</div>";	
		 
		 }
		 
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getDevotionsListFeeds()
{
	try{

		 $date =$this->dbh->prepare("select * from contents where category ='Devotions' and status='1'  order by id desc limit 1,6");
		 $date->execute();
		 echo "<div class='separator-2'></div>";
		 
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$content = $row['content'];
		 	$heading =  $row['heading'];
		 	$datee =  $row['date'];
		 	$id =  $row['id'];

		 
		 		echo"<div class='media margin-clear'>";
		 			   
						echo"<div class='media-body'>";
							$headings = str_replace(' ', '-', $heading);
							echo"<h6 class='media-heading'><a href='".BASE_URL."/devotion_details_feed/".$id."/".$headings.".html'>$heading</a></h6>";
							echo"<p class='small margin-clear'><i class='fa fa-calendar pr-10'></i>$datee</p>";
						echo"</div>";
					echo"<hr>";
				echo"</div>";	
		 
		 }
		 
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function getDailyScriptures()
{
	try{

		 $date =$this->dbh->prepare("select * from contents where category ='Daily Scripture' and status='1' order by id desc limit 5");
		 $date->execute();
		 echo "<div class='separator-2'></div>";
		 
		 echo "<div class='owl-carousel content-slider'>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$content = $row['content'];
		 	$heading =  $row['heading'];
		 	$datee =  $row['date'];
		 	$id =  $row['id'];
          echo "<div class='testimonial text-center padding-ver-clear'>";
		 
		 		echo"<h3><strong>$heading</strong></h3>";
		 			echo "<div class='separator'></div>";
		 			   
						echo"<div class='testimonial-body'>";
							echo "<blockquote>";
							echo "$content";
							echo "</blockquote>";
					
						echo"</div>";	
		 echo"</div>";	
		 }
		 echo"</div>";	
		 
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}

public function addFile()
{
	try {
		if (!empty($_FILES)) {
	$targetDir = "uploads/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir.$fileName;
    $date = date("Y-m-d H:i:s");
    
    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
        

          $dataa = $this->dbh->prepare('insert into contents(file_name, uploaded)values(:fileName,:date)');

			$dataa->bindParam(':fileName',$fileName);
			$dataa->bindParam(':date',$date);

			$res = $dataa->execute();

			if ($res) {
				echo "...Successfully Uploaded Images In Gallery...";
			}

    }
		}

		
	} catch (Exception $e) {
		trigger_error('Errors :'.$e->getMessage());
		
	}
}

public function getClients()
{
	try{

		 $date =$this->dbh->prepare('select * from client order by id desc');
		 $date->execute();
		 echo "<div class='box-body'>";
		 echo "<table id='example1' class='table table-bordered table-striped'>";
		 echo "<thead>";
		 echo"<tr>";
		 echo "<th>Client ID</th>";
		 echo "<th>Phone Number</th>";
		 echo "<th>Client Name</th>";
		 echo "<th>Email</th>";
		 echo "<th>District</th>";
		 echo "<th>Region</th>";
		 echo "<th>Residance</th>";
		 echo "<th>Product Name</th>";
         echo "<th>Edit</th>";
		 echo "</tr>";
		 echo "</thead>";
		 echo "<tbody>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$phone = $row['phone'];
		 	$name = $row['name'];
		 	$district = $row['district'];
		 	$region = $row['region'];
		 	$residance = $row['residance'];
		 	$productname = $row['productname'];
		 	$email = $row['email'];
		 	$id = $row['id'];

		 	echo "<tr>";
		 	echo "<td>C000$id</td>";
		 	echo "<td><a href='clientdetails?phone=$phone&&name=$name'>$phone<a></td>";
		 	echo "<td>$name</td>";
		 	echo "<td>$email</td>";
		 	echo "<td>$district</td>";
		 	echo "<td>$region</td>";
		 	echo "<td>$residance</td>";
		 	echo "<td>$productname</td>";
            echo "<td><a href='deleteClient?phone=$phone' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></td>";
		 	echo "</tr>";
		 }
		 echo "</tbody>";
		 echo "<tfoot>";
		 echo"<tr>";
		 echo "<th>Client ID</th>";
		 echo "<th>Phone Number</th>";
		 echo "<th>Client Name</th>";
		 echo "<th>Email</th>";
		 echo "<th>District</th>";
		 echo "<th>Region</th>";
		 echo "<th>Residance</th>";
		 echo "<th>Product Name</th>";
         echo "<th>Edit</th>";
		 echo "</tr>";
		 echo "</tfoot>";
		 echo "</table>";
		 echo "</div>";


	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getDevotionEdit()
{
	try{

		 $date =$this->dbh->prepare('select * from contents where category ="Devotions" order by id desc');
		 $date->execute();
		 echo "<div class='box-body'>";
		 echo "<table id='example1' class='table table-bordered table-striped'>";
		 echo "<thead>";
		 echo"<tr>";
		 echo "<th>ID</th>";
		 echo "<th>Heading</th>";
		 echo "<th>Added By</th>";
		 echo "<th>Date</th>";
		 echo "<th>Action</th>";
		 echo "<th>Delete</th>";
		 echo "</tr>";
		 echo "</thead>";
		 echo "<tbody>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$datee = $row['date'];
		 	$heading = $row['heading'];
		 	$addedBy = $row['addedBy'];
		 	$id = $row['id'];
		 	$status = $row['status'];

		 	echo "<tr>";
		 	echo "<td>D0$id</td>";
		 	echo "<td>$heading</td>";
		 	echo "<td>$addedBy</td>";
		 	echo "<td>$datee</td>";
		 	echo "<td>";
		 	if ($status==0) {
		 		echo"<a href='publish.php?id=$id'>Publish</a>";
		 	}else{
		 		echo"<a href='unpublish.php?id=$id'>Un-Publish</a>";
		 	}

		 	echo "</td>";
		 	echo "<td><a href='deleteDevotions.php?id=$id'>Delete</a></td>";
		 	echo "</tr>";
		 }
		 echo "</tbody>";
		 echo "</table>";
		 echo "</div>";


	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getgalleryEdit()
{
	try{

		 $date =$this->dbh->prepare('select * from files order by id desc');
		 $date->execute();
		 echo "<div class='box-body'>";
		 echo "<table id='example1' class='table table-bordered table-striped'>";
		 echo "<thead>";
		 echo"<tr>";
		 echo "<th>ID</th>";
		 echo "<th>Image</th>";
		 echo "<th>Date</th>";
		 echo "<th>Action</th>";
		 echo "</tr>";
		 echo "</thead>";
		 echo "<tbody>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$image = $row['file_name'];
		 	$uploaded = $row['uploaded'];
		 	$id = $row['id'];
		 	$status = $row['status'];

		 	echo "<tr>";
		 	echo "<td>D0$id</td>";
		 	echo "<td><img src='uploads/$image' width='200px' height='100' class='img-rounded'></td>";
		 	echo "<td>$uploaded</td>";
		 	echo "<td>";
		 	if ($status==0) {
		 		echo"<a href='publish_gallery.php?id=$id'>Publish</a>";
		 	}else{
		 		echo"<a href='unpublish_gallery.php?id=$id'>Un-Publish</a>";
		 	}
		 	echo "</td>";
		 	echo "</tr>";
		 }
		 echo "</tbody>";
		 echo "</table>";
		 echo "</div>";


	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function addEvent()
{ 

	try {
	if (isset($_POST['addEvents'])) {
		$content = $_POST['content'];
		$targetDir = "uploads/";
	    $fileName = $_FILES['image']['name'];
	    $targetFile = $targetDir.$fileName;

		if(empty($fileName)) {
			echo "Fill In All Fields";
		}else{
			if (move_uploaded_file($_FILES['image']['tmp_name'],$targetFile)) {
			$pay="insert into events (file_name,content) VALUES (:file_name,:content)";
			$data = $this->dbh->prepare($pay);
			$data->bindParam(':content',$content);
			$data->bindParam(':file_name',$fileName);
			$res = $data->execute();
			if ($res) {
		
				echo "Successfuly Added New Event";
				
			}else{
				echo "Not Adding";
			}
		
	}
		}//end Elsea



	}
	
} catch (Exception $e) {
	//trigger_error("error_msg".$e->getMessage());
}
	
}
public function getContact()
{
	try{

		 $date =$this->dbh->prepare('select * from contact order by id desc');
		 $date->execute();
		 echo "<div class='box-body'>";
		 echo "<table id='example1' class='table table-bordered table-striped'>";
		 echo "<thead>";
		 echo"<tr>";
		 echo "<th>ID</th>";
		 echo "<th>Name</th>";
		 echo "<th>Email</th>";
		 echo "<th>Message</th>";
		 echo "<th>Action</th>";
		 echo "</tr>";
		 echo "</thead>";
		 echo "<tbody>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$name = $row['name'];
		 	$message = $row['message'];
		 	$email = $row['email'];
		 	$id = $row['id'];

		 	 $result = $this->seeMore($row['message'],'latestnews','id',$email,$id);


		 	echo "<tr>";
		 	echo "<td>D0$id</td>";
		 	echo "<td>$name</td>";
		 	echo "<td>$result</td>";
		 	echo "<td>$email</td>";
		 	echo "<td><a href='reply.php?id=$id'>Reply</a></td>";
		 	echo "</tr>";
		 }
		 echo "</tbody>";
		 echo "</table>";
		 echo "</div>";


	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}
public function getScriptureEdit()
{
	try{

		 $date =$this->dbh->prepare('select * from contents where category ="Daily Scripture" order by id desc');
		 $date->execute();
		 echo "<div class='box-body'>";
		 echo "<table id='example1' class='table table-bordered table-striped'>";
		 echo "<thead>";
		 echo"<tr>";
		 echo "<th>ID</th>";
		 echo "<th>Heading</th>";
		 echo "<th>Added By</th>";
		 echo "<th>Date</th>";
		 echo "<th>Action</th>";
		 echo "</tr>";
		 echo "</thead>";
		 echo "<tbody>";
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$datee = $row['date'];
		 	$heading = $row['heading'];
		 	$addedBy = $row['addedBy'];
		 	$id = $row['id'];
		 	$status = $row['status'];

		 	echo "<tr>";
		 	echo "<td>D0$id</td>";
		 	echo "<td>$heading</td>";
		 	echo "<td>$addedBy</td>";
		 	echo "<td>$datee</td>";
		 	echo "<td>";
		 	if ($status==0) {
		 		echo"<a href='scriptures_publish.php?id=$id'>Publish</a>";
		 	}else{
		 		echo"<a href='scriptures_unpublish.php?id=$id'>Un-Publish</a>";
		 	}
		 	echo "</td>";
		 	echo "</tr>";
		 }
		 echo "</tbody>";
		 echo "</table>";
		 echo "</div>";


	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}
}



public function getSessionInfo()
{
	try {
        if($_SESSION['username']){
        $username = $_SESSION['username'];

        $data =$this->dbh-> prepare('select * from userregister where username=:username');
        $data->bindParam(':username',$username);
        $results= $data->execute();

        while ($row= $data->fetch(PDO::FETCH_ASSOC)) {

            $firstname = $row['firstname'];
		 	$lastname = $row['lastname'];
		 	$email = $row['email'];
		 	$password = $row['password'];
		 	$username = $row['username'];
		 	$category = $row['category'];

		 		echo "<div class='row'>";
		 		echo "<div class='col-md-5'>";
		 		echo "<img src='dist/img/user2-160x160.jpg' class='user-image image-circle image-rounded' />";
		 		echo "</div>";
		 		echo "<div class='col-md-7'>";
		 		echo "<h4>First Name : $firstname </h4>";
		 		echo "<h4>Last Name : $lastname </h4>";
		 		echo "<h4>Email : $email </h4>";
		 		echo "<h4>Username : $username </h4>";
		 		echo "<h4>Category : $category</h4>";
		 		echo "</div>";
		 		echo "</div>";


		 		echo "<div class='row'>";
		 		echo "<div class='col-md-12'>";
		 		//echo "<h4>Email : $email </h4>";
		 		echo "</div>";
		 		echo "</div>";



		 		echo "<div class='row'>";
		 		echo "<div class='col-md-6'>";
		 		//echo "<h4>Username : $username </h4>";
		 		echo "</div>";
		 		echo "<div class='col-md-6'>";
		 		//echo "<h4>Category : $category</h4>";
		 		echo "</div>";
		 		echo "</div>";


           }


          }



} catch (PDOException $e) {

     }
}
public function getSessionForm()
{
	try {
        if($_SESSION['username']){
        $username = $_SESSION['username'];

        $data =$this->dbh-> prepare('select * from userregister where username=:username');
        $data->bindParam(':username',$username);
        $results= $data->execute();

        while ($row= $data->fetch(PDO::FETCH_ASSOC)) {

            $firstname = $row['firstname'];
		 	$lastname = $row['lastname'];
		 	

		 		echo " $firstname $lastname ";
		
		 		
           }


          }



} catch (PDOException $e) {

     }
}




public function send_sms($recipients,$message)
{
//require('AfricasTalkingGateway.php');
$username   = "kluz116";
$apikey     = "448cdfda1c4065a0274f6561a794b833cc34b0e13e0e21532b7b5e831822e4b6";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
//$recipients = "+254711XXXYYY,+254733YYYZZZ";
// And of course we want our recipients to know what we really do
//$message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);
// Any gateway error will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
    //echo " Number: " .$result->number;
    //echo " Status: " .$result->status;
    //echo " MessageId: " .$result->messageId;
    //echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
}



}//End of the class.






?>
