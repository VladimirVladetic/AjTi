<?php

include 'database.php';

session_start();

if($_SESSION['loggedin'] && !(time() > $_SESSION['expire'])){

$_SESSION['start'] = time(); 
$_SESSION['expire'] = $_SESSION['start'] + (300); //5 minutes   

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $role = $_POST['role'];

    $sql = "update user set role = '$role' where id = '$id';";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    echo "success";
}
}
else{
    session_destroy();
    header("Location: index.php");
}