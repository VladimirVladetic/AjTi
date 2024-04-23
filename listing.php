<?php
require '../libs/Smarty.class.php';
include 'database.php';
include 'passwordHidder.class.php';

session_start();

if($_SESSION['loggedin'] && !(time() > $_SESSION['expire'])){

$_SESSION['start'] = time(); 
$_SESSION['expire'] = $_SESSION['start'] + (300); //5 minutes

$smarty = new Smarty;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from listing where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $smalldesc = $row['smalldesc'];
    $info = $row['info'];
    $employerid = $row['employerid'];
    $companyid = $row['companyid'];
    $payment = $row['payment'];

    $sql = "select * from user where id=$employerid";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $employername = $row['name'];
    $employersurname = $row['surname'];
    $employerusername = $row['username'];
    $employeremail = $row['email'];

    $sql = "select * from company where id=$companyid";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $companyname = $row['name'];
    $companysector = $row['sector'];
    $companycity = $row['city'];

}

mysqli_close($con);

$smarty->assign('id',$id);
$smarty->assign('name',$name);
$smarty->assign('smalldesc',$smalldesc);
$smarty->assign('info',$info);
$smarty->assign('employerid',$employerid);
$smarty->assign('companyid',$companyid);
$smarty->assign('payment',$payment);
$smarty->assign('companyname',$companyname);
$smarty->assign('companycity',$companycity);
$smarty->assign('companysector',$companysector);
$smarty->assign('employername',$employername);
$smarty->assign('employersurname',$employersurname);
$smarty->assign('employerusername',$employerusername);
$smarty->assign('employeremail',$employeremail);

$smarty->assign('sessionrole',$_SESSION['role']);

$smarty->display('listing.tpl'); 
}
else{
    session_destroy();
    header("Location: index.php");
}
