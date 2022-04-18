<?php  

$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect ($server, $username, $password, $dbname);

if(isset($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $query = "insert into form (name, email, age) values ('$name', '$email','$age')";
    
    $run = mysqli_query($conn, $query) or die(mysqli_error());

    if($run){
        echo "form submited";
    }

}