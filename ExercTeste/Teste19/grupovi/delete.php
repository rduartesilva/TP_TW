<?php 

include("connect.php");

$rollno = $GET_['rn'];
$query = "DELETE FROM STUDENT WHERE ROLLNO = 'rollno'";

$data = mysqli_query($conn, $query);

?>