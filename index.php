<?php
include 'database.php';
include '../libs/Smarty.class.php';
include 'parameterChecker.class.php';

$smarty = new Smarty;
$parameterChecker = new ParameterChecker;

session_start(); 

if(!isset($_SESSION['attempts'])){
    $_SESSION['attempts']=1;
}

if(!isset($_SESSION['registrationAttempt'])){
    $_SESSION['registrationAttempt'] = false;
}

if(!isset($_SESSION['alertText'])){
    $_SESSION['alertText'] = '';
}

// var_dump("test");


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
        $_SESSION['companyid'] = $row[8];
        $_SESSION['logsent'] = 0;
        $_SESSION['start'] = time(); 
        $_SESSION['expire'] = $_SESSION['start'] + (300); 
        if($_SESSION['loggedin']){
            header("Location: listings.php");
            exit;
        }
    }
    else{
        $_SESSION['attempts'] += 1;
        // echo "<script>alert('Incorrect user information.')</script>";
    }
}
else if(isset($_POST['registerbtn'])){
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

        $_SESSION['alertText'] = $parameterChecker->getAlertText();
    
        if(!$error){
            $_SESSION['registrationAttempt'] = false;
            if(isset($_FILES['register-cv']) && $_FILES['register-cv']['error'] == UPLOAD_ERR_OK) {
                $cvDirectory = 'pdf/';

                if (!file_exists($cvDirectory)) {
                    mkdir($cvDirectory, 0777, true);
                }

                $cvFile = $cvDirectory . $id . '.pdf';
                $cvFileType = strtolower(pathinfo($_FILES['register-cv']['name'], PATHINFO_EXTENSION));

                if($cvFileType != "pdf") {
                    
                    $_SESSION['alertText'] = "Only PDF files are allowed.";
                } else {
                    if (move_uploaded_file($_FILES['register-cv']['tmp_name'], $cvFile)) {
                        $sql = "insert into user(id,username,name,surname,yearofbirth,password,role,email,companyid)values('$id','$username','$name','$surname','$yearofbirth','$password','$role','$email','$companyid')";
                        if(mysqli_query($con,$sql)){
                            $_SESSION['registrationAttempt'] = true;
                            $_SESSION['alertText'] = "Registration successful. Your username is $username";
                            header("Location: index.php");
                        } else {
                            echo "<script>alert('Failure!')</script>";
                        }
                    } else {
                        $_SESSION['registrationAttempt'] = true;
                        $_SESSION['alertText'] = "There was an error uploading your file.";
                    }
                }
            } else {
                $_SESSION['registrationAttempt'] = true;
                $_SESSION['alertText'] = "File upload failed.";
            }
        }
        else{
            $_SESSION['registrationAttempt'] = true;
        }
    }
    else{
        $_SESSION['registrationAttempt'] = true;
        $_SESSION['alertText'] = "User already exists.";
    }
}

mysqli_close($con);

$smarty->assign('alertText', $_SESSION['alertText']);
$smarty->assign('registrationAttempt', $_SESSION['registrationAttempt']);
$smarty->assign('attempts', $_SESSION['attempts']);
$smarty->display('templates/index.tpl');