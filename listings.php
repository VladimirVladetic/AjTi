<?php
require '../libs/Smarty.class.php';
include 'database.php';

$smarty = new Smarty;

session_start();

if($_SESSION['loggedin'] && !(time() > $_SESSION['expire'])){

$_SESSION['start'] = time(); 
$_SESSION['expire'] = $_SESSION['start'] + (300); //5 minutes
$_SESSION['logsent'] += 1;

$sql = "select * from listing order by id asc";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result)) {
    $id[] = $row['id'];
    $listingdata[] = $row;
}

$sql = "select * from company";

$result = mysqli_query($con,$sql);
    
while($row = mysqli_fetch_assoc($result)) {
    $companydata[] = $row;
}

$sql = "select * from user";

$result = mysqli_query($con,$sql);
    
while($row = mysqli_fetch_assoc($result)) {
    $userdata[] = $row;
}



mysqli_close($con);

$smarty->assign('sessionrole', $_SESSION['role']);
$smarty->assign('sessionname', $_SESSION['name']);
$smarty->assign('sessionid', $_SESSION['id']);
$smarty->assign('sessionusername', $_SESSION['username']);

$smarty->assign('companydata', $companydata); 
$smarty->assign('userdata', $userdata);
$smarty->assign('listingdata', $listingdata);

$smarty->assign('attempts', $_SESSION['attempts']);
$smarty->assign('logsent', $_SESSION['logsent']);

$smarty->display('listings.tpl'); 

}else{
    session_destroy();
    header("Location: index.php");
}