<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/basic.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/enterLog.js" defer></script>
   
    <title>Login Page</title>
</head>
<body>

    <div class="container">
    
        <img class="logo" src="./images/logo-white.png" alt="Atos logo"  width="200" height="100"> 
        <form id="login-form" method="post" action="index.php" class="login-form-container">
            <h1> USER LOGIN </h1>
            <input id="login-username" type="text" name="username" placeholder="Enter your username."/>
            <input id="login-password" type="password" name="password" placeholder="Enter your password."/>
            <input id="login-button" type="submit" name="loginbtn" value="Login"/>
        </form>

    </div>

</body>
</html>