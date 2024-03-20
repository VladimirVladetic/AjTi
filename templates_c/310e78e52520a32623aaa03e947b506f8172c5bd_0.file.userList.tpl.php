<?php
/* Smarty version 4.3.4, created on 2024-03-20 13:31:46
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65fad732165c94_53292656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '310e78e52520a32623aaa03e947b506f8172c5bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\userList.tpl',
      1 => 1710937902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fad732165c94_53292656 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/users.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/enterLog.js" defer><?php echo '</script'; ?>
>
    <title>User List</title>
</head>
<body onload="enterLog(<?php echo $_smarty_tpl->tpl_vars['logsent']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['attempts']->value;?>
)">

    <div class="container">

    <div class="leftColumn">
    <img class="logo" src="./images/logo-white-cropped.png" alt="Atos logo"  width="200" height="100"> 
    <p class="margins-needed" id="sessionname" data-value="<?php echo $_smarty_tpl->tpl_vars['sessionname']->value;?>
">Welcome <?php echo $_smarty_tpl->tpl_vars['sessionname']->value;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?><form class="margins-needed" id="go-to-newuser" method="post" action="newUser.php"> 
        <input class="basic-button" type='submit' name='newuserbtn' value='Enter new user.'/>
    </form><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?><form class="margins-needed" id="go-to-newcompany" method="post" action="newCompany.php"> 
        <input class="basic-button" type='submit' name='newcompanybtn' value='Enter new company.'/>
    </form><?php }?>
    <form class="margins-needed" id="go-to-search" method="post" action="searchUserByID.php">
        <input class="basic-button" type="submit" name='gotosearchbtn' value="Search by ID"/>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?> <form class="margins-needed" id="delete-selected-users" method="post" action="userList.php">
        <input class="basic-button" type="submit" name='deleteusersbtn' value="Delete selected users"/>
    </form><?php }?>
    <form class="margins-needed" id="logout" method="post" action="userList.php">
        <input class="basic-button" type="submit" name='logoutbtn' value="Log out"/>
    </form>
    </div>

    <div class="rightColumn">
    <table>
        <thead class="margins-needed">
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Year of birth</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody class="margins-needed">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?> 
            <?php if (!($_smarty_tpl->tpl_vars['sessionrole']->value == "user" && $_smarty_tpl->tpl_vars['user']->value['role'] == "admin")) {?>
            <tr> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companydata']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['company']->value['id'] == $_smarty_tpl->tpl_vars['user']->value['companyid']) {?>
                    <?php $_smarty_tpl->_assignInScope('companyname', $_smarty_tpl->tpl_vars['company']->value['name']);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <td><a href="http://localhost/smarty-4.3.4/AjTi/user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td> 
                <td><a href="http://localhost/smarty-4.3.4/AjTi/user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['yearofbirth'];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?><td><input type="checkbox" form="delete-selected-users" name="checkbox<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"/></td><?php }?>
            <tr> 
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>

    </div>
    
</body>
</html><?php }
}
