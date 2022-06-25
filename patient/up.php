<?php include'header.php';?>
<html>

<body>
<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'patient_management_system');

   $id = $_GET["id"];
   //select
   $sql =  " select * from pt WHERE pt.id='$id'";
   //execute
   $records=mysqli_query($con,$sql);
   ?>
   <center>
<h7 style="color:White;">Edit Informetion.</h7>
   <table>
   <tr>
   <th>ID</th>
   <th>Patient Name</th>
   <th>DISEASE</th>
   <th>CONTACT</th>
      <th>  </th>

   </tr>
 </center>
   <?php
   while ($row =mysqli_fetch_array($records))
   {
	   echo"<tr><form action = update.php method=post>";
   echo"<td><input type = text name=id value='".$row['id']."'></td>";
   echo"<td><input type = text name=PName value='".$row['PName']."'></td>";
   echo"<td><input type = text name=disease value='".$row['disease']."'></td>";
   echo"<td><input type = text name=contact value='".$row['contact']."'></td>";
   echo"<td><input type = submit>";
   echo"</form></tr>";
   }
   ?>
</table>
</body>
</center>
   </html>

<?php include'footer.php';?>
