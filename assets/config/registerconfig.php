<?php 

session_start();
header('location: register.php');
$connect = mysqli_connect('localhost','root');

if ($connect) {
   echo "connection succesful";
} else {
    echo "no connection";
}

mysqli_select_db($connect,'users');

$phone = $_POST['phonenumber'];
$name = $_POST['fullname'];
$email = $_POST['email'];
$passwords = $_POST['pass'];

$query = "select * FROM users WHERE phone number = '$phone', full name = '$name', email address = '$email', password = '$passwords' ";

$result = mysqli_query($connect, $query);

$numrows = mysqli_num_rows($result);

if ($numrows == 1) {
   echo "duplicate data";
}
else {
    $querr = "inser into users(phone number, full name, email address, password) values('$phone', '$name', '$email', '$passwords')";

    mysqli_query($connect, $querr);
}
?>