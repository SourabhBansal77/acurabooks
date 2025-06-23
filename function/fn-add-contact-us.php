<?php
// Start the session
include '../includes/conn.php';
include '../includes/session.php';
?>

<?php

if(isset($_POST['add']))
{
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$emailid=$_POST['emailid'];
$message=$_POST['message'];
$service="";	
//$service=$_POST['service'];
	
//$mainmessage = "Service Interested In:".$service."<br/>Message:".$message."";
$mainmessage = $message;

date_default_timezone_set('Asia/Kolkata');
$datetime = date('m/d/Y h:i:s a', time());
$conn = $pdo->open();

try
{

$stmt = $conn->prepare("INSERT INTO tbl_dyweb_enquiry (name,mobileno,emailid,message,datetime) VALUES (:name,:mobileno,:emailid,:message,:datetime)");
$stmt->execute(['name'=>$name,'mobileno'=>$mobileno,'emailid'=>$emailid,'message'=>$mainmessage,'datetime'=>$datetime]);	

$_SESSION['success'] = 'Updated successfully';
echo "<script> window.location.href='../contact.php'; </script>";

}
catch(PDOException $e)
{

$_SESSION['error'] = $e->getMessage();
echo "Failed";

}	

$pdo->close();
			
}
else
{
$_SESSION['error'] = 'Invaild Request';
echo "<script> window.location.href='../contact-us.php'; </script>";
}


// Set session variables
//$_SESSION['success'] = 'Updated successfully';
//$_SESSION["favcolor"] = "7";
//$_SESSION["favanimal"] = "8";
//echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
//echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
//echo "<script> window.location.href='../contact-us'; </script>";

?>
