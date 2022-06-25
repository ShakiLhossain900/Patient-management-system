<?php include 'header.php';?>
<!doctype html>
<html>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=digits] {
  width: auto !important;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {

  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin-left:600px;
  border: none;
  cursor: pointer;
  width: 400px;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

</style>
<body>
</div>
    <form>
  <div class="container">
    <h1>Insert patient information</h1>
    <p>Please fill all required fields</p>
    <hr>

    <label ><b>Patient ID</b></label>
    <input type="digits" placeholder="Enter your id" name="id"  required/>
    <label ><b>Patient Name</b></label>
    <input type="text" placeholder="Enter your full name" name="PName" required/>
    <label ><b>Patient Disease</b></label>
    <input type="text" placeholder="enter patient disease" name="disease"  required/>
    <label ><b>Contact</b></label>
    <input type="digits" placeholder="enter your contact number" name="contact"  required/>

    <button type="submit" class="registerbtn" value="Submit">Register</button>
  </div>
</form>
</body>
</html>
<?php include'footer.php';?>