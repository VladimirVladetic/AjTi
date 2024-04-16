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
$invalidInfo = 0;
$error = 0;

if((isset($_POST['name']) && $_POST['name'] != "") && (isset($_POST['city']) && $_POST['city'] != "") && (isset($_POST['country']) && $_POST['country'] != "")
    && (isset($_POST['sector']) && $_POST['sector'] != "")){
    
    $name = $_POST['name'] ?? '';
    $city = $_POST['city'] ?? '';
    $country = $_POST['country'] ?? '';
    $sector = $_POST['sector'] ?? '';

    $sql = "select * from company where name='$name'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row || $row != null){
        $companyexists = 1;
        $error = 1;
    }

    $sql = "select max(id) from company";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $id = ($row[0] + 1) ?? '';

    if($error == 0){
        $sql = "insert into company(id,name,city,country,sector)values('$id','$name','$city','$country','$sector')";
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