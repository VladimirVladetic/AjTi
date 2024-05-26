<?php

include 'database.php';

session_start();

if($_SESSION['loggedin'] && !(time() > $_SESSION['expire'])){

$_SESSION['start'] = time(); 
$_SESSION['expire'] = $_SESSION['start'] + (300); //5 minutes

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM listing WHERE id = $id";
    if (mysqli_query($con, $sql)) {
        $response['success'] = true;
    } else {
        $response['error'] = 'Failed to delete listing.';
    }
}
}
else{
    session_destroy();
    header("Location: index.php");
}