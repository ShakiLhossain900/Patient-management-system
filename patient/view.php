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
    background-color: black;
    color: white;
    font-weight: bolder;
}


#myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 30%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        span
        {
            color:blue;
            font-size:25px;       
        }

        
        .home{
            text-decoration:None;
            background:green;
            color:yellow;
            margin-left: 5%;
            padding:.5%;
            border-radius:5px;
            letter-spacing: 2px;
            font-size: 18px;
        }
        
        .home:hover
                {
                    background-color: blue;
                    color: white;
                }                   


    </style>
</head>
<body>

<span>Search Patient:</span>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID.." title="Type in a name">

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

$sql = "SELECT * FROM pt";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table id='myTable'>";
	echo "<tr><th>ID</th><th>Patient Name</th><th>Discese</th><th>Contact</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>" . $row["id"]. "</td><td>" . $row["PName"]. "</td><td>" .$row["disease"]."</td><td>" .$row["contact"]."</td><td>"."<a href='up.php?id=".$row["id"]."'>Update</a>"."/"."<a href='delete.php?id=".$row["id"]."'>Delete</a>"."/"."<a href='print.php?id=".$row["id"]."'>Print</a>"."</td>";
        
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}



mysqli_close($conn);
?>


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
