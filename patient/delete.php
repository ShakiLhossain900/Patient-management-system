<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "patient_management_system";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["id"];
$sql = "DELETE FROM `pt` WHERE `pt`.`id` = '$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: view.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>