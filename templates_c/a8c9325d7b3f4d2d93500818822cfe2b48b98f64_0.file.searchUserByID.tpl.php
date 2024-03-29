<?php
/* Smarty version 4.3.4, created on 2024-03-29 09:24:24
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\searchUserByID.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66067ab8c96c93_34454787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c9325d7b3f4d2d93500818822cfe2b48b98f64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\searchUserByID.tpl',
      1 => 1711700654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66067ab8c96c93_34454787 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/essentials.css">
    
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/spinner.js" defer><?php echo '</script'; ?>
>
    <title>Search User</title>
</head>
<body>
    
    <div class="container">

    <div class="spinner-container">
            <div class="spinner"></div>
    </div>

    <img class="margins-needed" src="./images/Atos-Symbol.png" alt="Atos logo"  width="200" height="100"> 

    <input class="margins-needed" type="number" placeholder="Enter ID" id="id-number">
    <input class="margins-needed" id="searchbtn" type="submit" placeholder="Search" onclick="showSpinner()">

    <form class="margins-needed" id="go-to-userlist" method="post" action="userList.php"> 
        <tr><td><input type='submit' name='userlist' value='Go to user list'/></td></tr>
    </form>
    </div>

</body>



</html><?php }
}
