<?php
$connect=mysqli_connect("localhost","root","")or die("We did not connect to the database");
mysqli_select_db($connect,"eshamba")or die("We did not select the database");
?>