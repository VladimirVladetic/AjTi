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
$listingexists = 0;
$invalidInfo = 0;
$error = 0;

if((isset($_POST['name']) && $_POST['name'] != "") && (isset($_POST['smalldesc']) && $_POST['smalldesc'] != "") && (isset($_POST['info']) && $_POST['info'] != "")
    && (isset($_POST['payment']) && $_POST['payment'] != "")){
    
    $name = $_POST['name'] ?? '';
    $smalldesc = $_POST['smalldesc'] ?? '';
    $info = $_POST['info'] ?? '';
    $payment = $_POST['payment'] ?? '';

    $sql = "select * from listing where name='$name'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row || $row != null){
        $listingexists = 1;
        $error = 1;
    }

    $sql = "select max(id) from listing";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $id = ($row[0] + 1) ?? '';

    $employerid = $_SESSION['id'];
    $companyid = $_SESSION['companyid'];

    if($error == 0){
        $sql = "insert into listing(id,name,smalldesc,info,employerid,companyid,payment)values('$id','$name','$smalldesc','$info','$employerid','$companyid','$payment')";
        if(mysqli_query($con,$sql)){
            // echo "<script>alert('Success!')</script>";

            header("Location: userList.php");
        }else{
            // echo "<script>alert('Failure!')</script>";
            $invalidInfo = 1;
        }
    }
}
else{
    $invalidInfo = 1;
}


$smarty->assign('invalidInfo', $invalidInfo);
$smarty->assign('listingexists', $listingexists);
$smarty->assign('sessionrole', $_SESSION['role']);

mysqli_close($con);

$smarty->display('templates/newListing.tpl');

}
else{
    session_destroy();
    header("Location: index.php");
}
?>