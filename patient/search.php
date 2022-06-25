<?php include 'header.php';?>
<center>
<form method="POST" style="text-align:center">

<h1 style="font-size:200%;">Search Patient Information</h1>
<h2 style="font-size:150%;"> Search By ID:
</h2>
<input type="text" style="font-size:150%;" name="search_id"><br>
<br>
 <button class="button" ><b><big>Search</big></button>
  <br><br>
</form>

<article class="article">

  <table border="1" align="center">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient_management_system";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT a.id,a.PName,b.d_name,c.PatName,a.disease,a.contact,c.bill FROM pt a INNER JOIN doctor b on a.id=b.id  join pat c on a.id=c.id where a.id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row


  echo "<tr><th>ID</th><th>P Name</th><th>Doctor Name</th><th>Pathalogy Name</th><th>Discese</th><th>Contact</th><th>Bill Status</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>". $row["id"]. "</td><td>" . $row["PName"]."</td><td>". $row["d_name"]. "</td><td>". $row["PatName"]. "</td><td>". $row["disease"]. "</td><td>". $row["contact"]. "</td><td>". $row["bill"]. "</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "<h2><font color='black'>No Data Found </font></h2>";
}

mysqli_close($conn);
?> 
</div>

</div>

</center>
<?php include 'footer.php';?>
