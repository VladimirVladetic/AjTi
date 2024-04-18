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
    $surname = $row['surname'];
    $yearofbirth = $row['yearofbirth'];
    $password = $row['password'];
    $role = $row['role'];
    $companyid = $row['companyid'];
    $username = $row['username'];
    $email = $row['email'];

}

mysqli_close($con);

$smarty->assign('id',$id);
$smarty->assign('name',$name);
$smarty->assign('surname',$surname);
$smarty->assign('yearofbirth',$yearofbirth);
$smarty->assign('password',$password);
$smarty->assign('username',$username);
$smarty->assign('email',$email);
$smarty->assign('role',$role);
$smarty->assign('companyname',$companyname);
$smarty->assign('sessionrole',$_SESSION['role']);
$smarty->assign('companies',$companies);

$smarty->display('user.tpl'); 
}
else{
    session_destroy();
    header("Location: index.php");
}
