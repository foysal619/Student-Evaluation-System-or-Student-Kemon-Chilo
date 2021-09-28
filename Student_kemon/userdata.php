<?php

$connt = mysqli_connect("localhost","root","","student_details");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>