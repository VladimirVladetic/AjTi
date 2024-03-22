<?php
/* Smarty version 4.3.4, created on 2024-03-22 12:44:16
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fd6f10c78255_30599394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0da77831dd5fc3b77aa3c8fe4770245592ce60d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\user.tpl',
      1 => 1711107855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fd6f10c78255_30599394 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/user.css">
    <link rel="stylesheet" href="./styles/essentials.css">
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/changeCompany.js" defer><?php echo '</script'; ?>
>
    <title>User page</title>
</head>
<body>

    <div class="container">
    <img class="margins-needed" src="./images/logo-white-cropped.png" alt="Atos logo"  width="200" height="auto"> 
    <table>

        <div id="user-holder" data-value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div>

        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
            <form class="margins-needed" id="update-user-form" method="post" action="user.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <tr><td>Username: <input id="info-username" type="text" name="username" placeholder="Enter username." <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" <?php }?>></td></tr>
                <tr><td>Name: <input id="info-name" type="text" name="name" placeholder="Enter name." <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php }?>></td></tr>
                <tr><td>Surname: <input id="info-surname" type="text" name="surname" placeholder="Enter surname." <?php if ((isset($_smarty_tpl->tpl_vars['surname']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" <?php }?>></td></tr>
                <tr><td>E-mail: <input id="info-email" type="email" name="email" placeholder="Enter e-mail." <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" <?php }?>></td></tr>
                <tr><td>Year of birth: <input id="info-yearofbirth" type="number" name="yearofbirth" placeholder="Enter year of birth."<?php if ((isset($_smarty_tpl->tpl_vars['yearofbirth']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['yearofbirth']->value;?>
" <?php }?>></td></tr>
                <tr><td>Password: <input id="info-password" type="text" name="password" placeholder="Enter password."<?php if ((isset($_smarty_tpl->tpl_vars['password']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" <?php }?>></td></tr>
                <tr><td>Company: <?php if ((isset($_smarty_tpl->tpl_vars['companyname']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php }?></td></tr>
                <tr><td><?php if ((isset($_smarty_tpl->tpl_vars['role']->value))) {?> Role: <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
 <?php }?> </td></tr>
                <tr><td><button class="basic-button" id="update-info-button">Update user information</button></td></tr>
            </form>
            <tr><td><button class="basic-button" onclick="openChangeCompanyPopup()">Change company</button></td></tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "user") {?>
            <tr><td>Name: <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?></td></tr>
            <tr><td>Surname: <?php if ((isset($_smarty_tpl->tpl_vars['surname']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
 <?php }?></td></tr>
            <tr><td>Year of birth: <?php if ((isset($_smarty_tpl->tpl_vars['yearofbirth']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['yearofbirth']->value;?>
 <?php }?></td></tr>
                        <tr><td>Company: <?php if ((isset($_smarty_tpl->tpl_vars['companyname']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php }?></td></tr>
            <tr><td><?php if ((isset($_smarty_tpl->tpl_vars['role']->value))) {?> Role: <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
 <?php }?> </td></tr>
        <?php }?>
            
    </table>
        <form id="delete-this-user" method="post" action="user.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <input class="basic-button" type='submit' name='deleteuserbtn' value="Delete user"/>
        </form>
        <form id="go-to-userlist" method="post" action="userList.php"> 
            <input class="basic-button" type='submit' name='userlist' value='Go to user list'/>
        </form>

    </div>

    <div class="overlay" id="overlay"></div>
        <div class="popup-container" id="popup">
            <h2>Change Company</h2>
            <label for="dropdown">Select a company:</label>
            <select id="dropdown">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?> 
                <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button class="basic-button" onclick="submitChange()">Submit</button>
            <button class="basic-button" onclick="closePopup()">Close</button>
        </div>

</body>
</html><?php }
}
