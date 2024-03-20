<?php
/* Smarty version 4.3.4, created on 2024-03-20 08:59:42
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fa976e6a1a15_17290940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6140f53ed83fddb711dbb2fe19933ea6eaea4c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\index.tpl',
      1 => 1710921434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa976e6a1a15_17290940 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/basic.css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/enterLog.js" defer><?php echo '</script'; ?>
>
   
    <title>Login Page</title>
</head>
<body>

    <div class="container">
    
        <img class="logo" src="./images/logo-white.png" alt="Atos logo"  width="200" height="100"> 
        <form id="login-form" method="post" action="index.php" class="login-form-container">
            <h1> USER LOGIN </h1>
            <input id="login-name" type="text" name="name" placeholder="Enter your name."/>
            <input id="login-password" type="password" name="password" placeholder="Enter your password."/>
            <input id="login-button" type="submit" name="loginbtn" value="Login"/>
        </form>

    </div>

</body>
</html><?php }
}
