<?php

include("connect.php")

$query = "select * from albuns";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0){
    while($result = mysqli_fetch_assoc($data)){
        echo <tr>
        <td>".$result['rollno']."</td>
        <td>".$result['name]."</td>
        <td>".$result['email']."</td>
        
    }
}

?>