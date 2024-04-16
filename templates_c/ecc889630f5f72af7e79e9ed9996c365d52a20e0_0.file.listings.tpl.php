<?php
/* Smarty version 4.3.4, created on 2024-04-16 09:10:31
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\listings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661e2467688410_62397471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc889630f5f72af7e79e9ed9996c365d52a20e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\listings.tpl',
      1 => 1713251370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661e2467688410_62397471 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/listings.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <title>Job listings</title>
</head>

<body>

    <div class="container">

        <div class="leftColumn">

        <img class="logo" src="./images/new-logo.png" alt="logo"  width="200" height="auto"> 
        <p class="margins-needed" id="sessionname" data-value="<?php echo $_smarty_tpl->tpl_vars['sessionname']->value;?>
">Welcome <?php echo $_smarty_tpl->tpl_vars['sessionname']->value;?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
            <a href="newUser.php">
                <button class="basic-button">Enter new user</button>
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
            <a href="newCompany.php">
                <button class="basic-button">Enter new company</button>
            </a>
        <?php }?>
        <a href="userList.php">
            <button class="basic-button">User list</button>
        </a>
        <form id="logout" method="post" action="userList.php"></form>
            <input class="basic-button" form="logout" type="submit" name='logoutbtn' value="Log out"/>
        </div>

    </div>

</body>
</html><?php }
}
