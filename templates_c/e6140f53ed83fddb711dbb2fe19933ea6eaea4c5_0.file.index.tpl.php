<?php
/* Smarty version 4.3.4, created on 2024-05-05 19:12:56
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6637be1827ab95_42195294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6140f53ed83fddb711dbb2fe19933ea6eaea4c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\index.tpl',
      1 => 1714929175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6637be1827ab95_42195294 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/basic.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/index.js" defer><?php echo '</script'; ?>
>
   
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

            <p id="registration-instruction" style="display: none;">All fields must be filled. Password must be at least 8 characters long and have at least one 
                lowercase and uppercase character as well as a number. Please use only letters from the English 
                alphabet when registering an account.</p>

            <form id="registration-form" style="display: none;" method="post">
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

    <?php if ($_smarty_tpl->tpl_vars['attempts']->value > 1) {?>
        <div class="alert" id="failAlert" style="display: block; margin-top: 5%;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Incorrect user information.</p>
        </div> 
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['registrationFail']->value == true) {?>
        <div class="alert" id="registrationFailAlert" style="display: block; margin-top: 5%;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText"><?php echo $_smarty_tpl->tpl_vars['alertText']->value;?>
</p>
        </div> 
    <?php }?>

</body>
</html><?php }
}
