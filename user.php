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
    $sql = "select * from user where id=$id";
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

    $sql = "select name from company where id=$companyid";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    $companyname = $row['name'];

    $sql = "select * from company";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)) {
        $companies[] = $row;
    }

    $sessioncompanyname = '';

    foreach($companies as $company) {
        if ($company['id'] == $_SESSION['companyid']) {
            $sessioncompanyname = $company['name']; 
        }
    }

}

if(isset($_POST['deleteuserbtn'])){
    $id = $_POST['id'];
    echo "<script>alert({$id})</script>";
    $sql = "delete from user where id=" . $id;
    mysqli_query($con,$sql);
}
else if(isset($_POST['name']) || isset($_POST['surname']) || isset($_POST['username']) || isset($_POST['yearofbirth']) || isset($_POST['password'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $yearofbirth = $_POST['yearofbirth'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    $sql = "update user set username = '$username', name = '$name', surname = '$surname', yearofbirth = '$yearofbirth', password = '$password' where id = $id;";
    mysqli_query($con,$sql);
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
$smarty->assign('companyid', $companyid);
$smarty->assign('companyname',$companyname);
$smarty->assign('sessionrole',$_SESSION['role']);
$smarty->assign('sessioncompanyid',$_SESSION['companyid']);
$smarty->assign('sessioncompanyname', $sessioncompanyname);
$smarty->assign('companies',$companies);

$smarty->display('user.tpl'); 
}
else{
    session_destroy();
    header("Location: index.php");
}
