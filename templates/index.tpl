<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/basic.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/index.js" defer></script>
   
    <title>Login Page</title>
</head>
<body>

    <div class="container">
    
        <div>

            <img class="logo" src="./images/new-logo.png" alt="Atos logo"  width="200" height="100">    

        </div>

        <div class="rightColumn">

            <form id="login-form" method="post" action="index.php">
                <input id="login-username" type="text" name="username" placeholder="Enter your username."/>
                <input id="login-password" type="password" name="password" placeholder="Enter your password."/>
            </form>
            <button class="basic-button" form="login-form" id="login-button" name="loginbtn">Login</button>
            
            <button class="basic-button" onclick="registrationDiv()" id="registration-button">Register</button>

            <form id="registration-form" style="display: none;">
                <input type="text" name="register-name" placeholder="Enter your name.">
                <input type="text" name="register-surname" placeholder="Enter your surname.">
                <input type="password" name="register-password" placeholder="Enter your password.">
                <input type="password" name="register-password-confirm" placeholder="Reenter your password.">
                <input type="email" name="register-email" placeholder="Enter your email.">
                <input type="text" name="register-year" placeholder="Enter your year of birth.">
            </form>
            <button class="basic-button" name="registerbtn" id="register-button" form="registration-form" style="display: none;">Register</button>

        </div>
        
    </div>

    {if $attempts > 1}
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Incorrect user information.</p>
        </div> 
    {/if}
    {if $registrationFail == true}
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Registration Fail</p>
        </div> 
    {/if}

</body>
</html>