<?php
header("location:view.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO pt(id,PName,disease,contact) VALUES ('$_POST[id]','$_POST[PName]','$_POST[disease]','$_POST[contact]')";


if (mysqli_query($conn, $sql)) {
    echo "NEW record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>