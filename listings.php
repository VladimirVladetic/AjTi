<?php
require '../libs/Smarty.class.php';
include 'database.php';

$smarty = new Smarty;

session_start();

if($_SESSION['loggedin'] && !(time() > $_SESSION['expire'])){

$_SESSION['start'] = time(); 
$_SESSION['expire'] = $_SESSION['start'] + (300); //5 minutes




mysqli_close($con);

$smarty->assign('sessionrole', $_SESSION['role']);
$smarty->assign('sessionname', $_SESSION['name']);
$smarty->display('listings.tpl'); 

}else{
    session_destroy();
    header("Location: index.php");
}