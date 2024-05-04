<?php
include 'database.php';
include '../libs/Smarty.class.php';

$smarty = new Smarty;

session_start(); 

if(!isset($_SESSION['attempts'])){
    $_SESSION['attempts']=1;
}

$registrationFail = false;

// if($_SESSION['attempts'] > 1){
//     echo $_SESSION['attempts'];
//     echo "<script>document.getElementById('failAlert').style.display = 'block';</script>";
// }

// $sql = "delete from user where surname=''";
// mysqli_query($con,$sql);

if(isset($_POST['loginbtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo "<script>alert('{$username}')</script>";

    $sql = "select * from user where username='$username'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    //echo "<script>alert('{$row[0]}')</script>";

    if(isset($row) && $row[1] == $username && $row[5] == $password){
        // session_start(); 
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $row[2];
        $_SESSION['username'] = $username;
		$_SESSION['id'] = $row[0];
        $_SESSION['role'] = $row[6];
        $_SESSION['email'] = $row[7];
        $_SESSION['logsent'] = 0;
        $_SESSION['start'] = time(); 
        $_SESSION['expire'] = $_SESSION['start'] + (300); 
        if($_SESSION['loggedin']){
            header("Location: userList.php");
        }
    }
    else{
        $_SESSION['attempts'] += 1;
        // echo "<script>alert('Incorrect user information.')</script>";
    }
}

if(isset($_POST["registerbtn"])){
    $name = $_POST['register-name'];
    $surname = $_POST['register-surname'];

    $sql = "select max(id) from user";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $id = ($row[0] + 1) ?? '';

    $username = $name . $surname . $id;

    $sql = "select * from user where username='$username'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    if(!(isset($row) && $row[1] == $username)){
        $password = $_POST['register-password'];
        $password2 = $_POST['register-password-confirm'];
        $email = $_POST['register-email'];
        $yearofbirth = $_POST['register-year'];
        $role = "user";
        $companyid = 8; //unemployed by default

        $error = $parameterChecker->checkParameters($name,$surname,$yearofbirth,$password,$password2,true);
    
        if(!$error){
            $sql = "insert into user(id,username,name,surname,yearofbirth,password,role,email,companyid)values('$id','$username','$name','$surname','$yearofbirth','$password','$role','$email','$companyid')";
            if(mysqli_query($con,$sql)){
                echo "<script>alert('Success!')</script>";
                header("Location: userList.php");
            }else{
                echo "<script>alert('Failure!')</script>";
            }
        }
        else{
            $registrationFail = true;
        }
    }
    else{
        $registrationFail = true;
    }
}

mysqli_close($con);

$smarty->assign('registrationFail', $registrationFail);
$smarty->assign('attempts', $_SESSION['attempts']);
$smarty->display('templates/index.tpl');