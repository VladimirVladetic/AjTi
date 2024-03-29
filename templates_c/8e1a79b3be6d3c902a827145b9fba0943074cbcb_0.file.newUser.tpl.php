<?php
/* Smarty version 4.3.4, created on 2024-03-29 08:23:34
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\newUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66066c76542234_47838113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1a79b3be6d3c902a827145b9fba0943074cbcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\newUser.tpl',
      1 => 1711697013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66066c76542234_47838113 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/user.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    <link rel="stylesheet" href="./styles/newUser.css">
    <title>New user</title>
</head>
<body>

    <div class="container">

        <div class="leftColumn">

            <img class="margins-needed" src="./images/logo-white-cropped.png" alt="logo"  width="250" height="auto"> 
            <table>
                <form class="margins-needed" id="insert-user" method="post" action="newUser.php">
                    <tr><td><input id="info-name" type="text" name="name" placeholder="Enter your name." <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php }?>></td></tr>
                    <tr><td><input id="info-surname" type="text" name="surname" placeholder="Enter your surname."<?php if ((isset($_smarty_tpl->tpl_vars['surname']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" <?php }?>></td></tr>
                    <tr><td><input id="info-email" type="text" name="email" placeholder="Enter your e-mail."<?php if ((isset($_smarty_tpl->tpl_vars['surname']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" <?php }?>></td></tr>
                    <tr><td><input id="info-yearofbirth" type="number" name="yearofbirth" placeholder="Enter your year of birth."<?php if ((isset($_smarty_tpl->tpl_vars['yearofbirth']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['yearofbirth']->value;?>
" <?php }?>></td></tr>
                    <tr><td><input id="info-password" type="text" name="password" placeholder="Enter your password."<?php if ((isset($_smarty_tpl->tpl_vars['password']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" <?php }?>></td></tr>
                    <tr><td>
                    <select name="company" id="info-company">
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
                    </td></tr>
                </form>
                </table>
            <button class="basic-button" form="insert-user" id="enter-info-button">Enter Information</button>
            <a href="userList.php">
                <button class="basic-button">Go to user list</button>
            </a>

        </div>

    </div>

</body>
</html><?php }
}
