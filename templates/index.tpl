<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/basic.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="./js/enterLog.js" defer></script>
   
    <title>Login Page</title>
</head>
<body>

    <div class="container">
    
        <div>

            <img class="logo" src="./images/new-logo.png" alt="Atos logo"  width="200" height="100">    

        </div>

        <div class="rightColumn">

            <form id="login-form" method="post" action="index.php">
                <h1> USER LOGIN </h1>
                <input id="login-username" type="text" name="username" placeholder="Enter your username."/>
                <input id="login-password" type="password" name="password" placeholder="Enter your password."/>
            </form>
            <button class="basic-button" form="login-form" id="login-button" name="loginbtn">Login</button>
            <a id="register-button" href="register.php">
                    <button class="basic-button" name="rgbtn">Register</button>
            </a>

        </div>
        
    </div>

    {if $attempts > 1}
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Incorrect user information.</p>
        </div> 
    {/if}

</body>
</html>