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
$companyexists = 0;

if((isset($_POST['name']) && $_POST['name'] != "") && (isset($_POST['city']) && $_POST['city'] != "") && (isset($_POST['country']) && $_POST['country'] != "")
    && (isset($_POST['sector']) && $_POST['sector'] != "") && (isset($_POST['employerid']) && $_POST['employerid'] != "")){
    
    $name = $_POST['name'] ?? '';
    $city = $_POST['city'] ?? '';
    $country = $_POST['country'] ?? '';
    $sector = $_POST['sector'] ?? '';
    $employerid = $_POST['employerid'] ?? '';

    $sql = "select * from company where name='$name'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if(!$row || $row == null){
        $companyexists = 1;
    }

    

}

$smarty->assign('companyexists', $companyexists);
$smarty->assign('sessionrole', $_SESSION['role']);

mysqli_close($con);

$smarty->display('templates/newCompany.tpl');

}
else{
    session_destroy();
    header("Location: index.php");
}
?>