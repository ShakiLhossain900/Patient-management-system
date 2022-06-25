<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>view</title>
    <style>
        body{
            color: black;
            align-content: center;
            margin:0;
            padding:0;
            
        }
        table {
  border-collapse: collapse;
  width: 100%;
  
 
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){
    background-color: #f2f2f2;
    color:black;
    }

th {
    background-color: blue;
    color: white;
    font-weight: bolder;
}



        
        span
        {
            color:blue;
            font-size:25px;       
        }

        .button
                {
                    margin-top: 80px;
                    font-size: 1.2em;
                    text-decoration: none;
                    border: 2px solid black;
                    padding: 8px 30px;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    color: yellow;
                    background-color: black;
                }
            .button:hover
                {
                    background-color: blue;
                    color: white;
                } 
                                  
                
</style>
</head>
<body>







<div id="printableArea">
    

     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT a.id,a.PName,b.d_name,c.PatName,a.disease,a.contact,c.bill FROM pt a INNER JOIN doctor b on a.id=b.id  join pat c on a.id=c.id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table id='myTable'>";
	echo "<tr><th>ID</th><th>P Name</th><th>Doctor Name</th><th>Pathalogy Name</th><th>Discese</th><th>Contact</th><th>Bill Status</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>" . $row["id"]. "</td><td>" . $row["PName"]. "</td><td>" . $row["d_name"]."</td><td>" .$row["PatName"]."</td><td>" .$row["disease"]."</td><td>" .$row["contact"]."</td><td>" .$row["bill"]."</td>";
        
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}



mysqli_close($conn);
?>

</div>
<center><input type="button" class="button" onclick="printDiv('printableArea')" value="PRINT DATA" /></center>




<script>
function printDiv(divName) 
{
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>


<script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
   
<br/>
<br/>

</body>
</html>
<?php include 'footer.php';?>
