<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/index.js" defer></script>
   
    <title>Login Page</title>
</head>
<body>

    <div class="container">
    
        <div>

            <img id="logo" class="logo" src="./images/new-logo.png" alt="AjTi logo"  width="200" height="100">    

        </div>

        <div class="rightColumn" id="flexible-padding">

            <form id="login-form" method="post" action="index.php">
                <input id="login-username" type="text" name="username" placeholder="Enter your username."/>
                <input id="login-password" type="password" name="password" placeholder="Enter your password."/>
            </form>
            <button class="basic-button" form="login-form" id="login-button" name="loginbtn">Login</button>
            
            <button class="basic-button" onclick="registrationDiv()" id="registration-button">Register</button>

            <p id="registration-instruction" style="display: none;">All fields must be filled. Password must be at least 8 characters long and have at least one 
                lowercase and uppercase character as well as a number. Please use only letters from the English 
                alphabet when registering an account.</p>

            <form id="registration-form" style="display: none;" method="post" enctype="multipart/form-data">
                <input type="text" name="register-name" placeholder="Enter your name.">
                <input type="text" name="register-surname" placeholder="Enter your surname.">
                <input type="password" name="register-password" placeholder="Enter your password.">
                <input type="password" name="register-password-confirm" placeholder="Reenter your password.">
                <input type="email" name="register-email" placeholder="Enter your email.">
                <input type="text" name="register-year" placeholder="Enter your year of birth.">
                <input type="file" name="register-cv" accept="application/pdf">
            </form>
            <button class="basic-button" name="registerbtn" id="register-button" form="registration-form" style="display: none;">Register</button>
            <button class="basic-button" onclick="backToLogin()" name="backbtn" id="back-button" style="display: none;">Back</button>

        </div>
        
    </div>

    {if $attempts > 1}
        <div class="alert" id="failAlert" style="display: block; margin-top: 5%;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Incorrect user information.</p>
        </div> 
    {/if}
    {if $registrationAttempt == true}
        <div class="alert" id="registrationFailAlert" style="display: block; margin-top: 5%;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">{$alertText}</p>
        </div> 
    {/if}
</body>
</html>