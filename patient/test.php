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
            width: 25%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1.5px solid blue;
            margin-bottom: 20px;
        }

        #myInput1 {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 25%;
            font-size: 12px;
            padding: 8px 8px 8px 8px;
            border: 1.5px solid blue;
            margin-bottom: 20px;
        }
        .dd{
            font-size:3.5em;
            color: black;
            text-align:center;
            padding:50px;
            text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00; 
        }
        span
        {
            color:black;
            font-size:25px; 
            text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;       
        }
        .insert{
            text-decoration:None;
            background:black;
            color:yellow;
            margin-left: 5%;
            padding:.5%;
            border-radius:5px;
            letter-spacing: 2px;
            font-size: 18px;
        }
        
        .insert:hover
                {
                    background-color: blue;
                    color: white;
                }      

    </style>
</head>
<body>
<div class="dd">
Student Management System
</div>
<span>Search By ID :</span>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID.." title="Type in a name">

<span>Search By Name :</span>
<input type="text" id="myInput1" onkeyup="myFunction()" placeholder="Search by Name.." title="Type in a name">


<a class ="insert" href="insert.html">INSERT</a>

     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tb_student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table id='myTable'>";
	echo "<tr><th>S_ID</th><th>S_NAME</th><th>DEPARTMETN</th><th>CONTACT</th><th>ACTION</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>" . $row["s_id"]. "</td><td>" . $row["s_name"]. "</td><td>" . $row["department"]."</td><td>" .$row["contact"]."</td><td>"."<a href='update.html?id=".$row["s_id"]."'>Update</a>"."/"."<a href='delete.php?id=".$row["s_id"]."'>Delete</a>"."</td>";
        
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
                td = tr[i].getElementsByTagName("td")[1];
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


<script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
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
