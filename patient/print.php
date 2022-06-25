<?php?>


  <div style="padding: 9px ;border: 0px;">
    <div class="table" >
      <div id="printableArea">
        <h2 align="center"> Patient Information Print </h2>
        <table border="1" align="center">
    	
          <?php
          $id = $_GET["id"];
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

          $sql = "SELECT * FROM pt WHERE id = '$id'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
              echo "<table align=center><tr><th>ID</th><th>PName</th><th>disease</th><th>contact</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["PName"]. "</td><td>" .$row["disease"]."</td><td>" .$row["contact"]."</td></tr>";

              }
              echo "</table>";
          }
          else {
              echo "0 results";
          }

          mysqli_close($conn);
          ?>
        </table>
      </div>

      <br><br>
      <center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>
    </div>
  </div>
 ?>

