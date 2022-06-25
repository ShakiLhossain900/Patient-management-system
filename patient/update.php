<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'patient_management_system');
   //update
   $sql =  " update pt set PName = '$_POST[PName]',disease = '$_POST[disease]',contact = '$_POST[contact]' where id = '$_POST[id]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=view.php");
   else
	   echo "Not update";
   ?>