<?php
require '../libs/Smarty.class.php';
include 'database.php';
include 'passwordHidder.class.php';
include 'parameterChecker.class.php';

session_start();

if($_SESSION['loggedin'] && !(time() > $_SESSION['expire'])){

$_SESSION['start'] = time(); 
$_SESSION['expire'] = $_SESSION['start'] + (300); //5 minutes 

$smarty = new Smarty;


$smarty->assign('sessionrole', $_SESSION['role']);
$smarty->display('templates/newCompany.tpl');

}
else{
    session_destroy();
    header("Location: index.php");
}
?>