<?php
/* Smarty version 4.3.4, created on 2024-06-25 16:30:09
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667ad471758e40_88113826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '310e78e52520a32623aaa03e947b506f8172c5bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\userList.tpl',
      1 => 1719325801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667ad471758e40_88113826 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/users.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/userSearch.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/essentials.js" defer><?php echo '</script'; ?>
>
    <title>User list</title>
</head>
<body>

    <div class="container">

    <div class="leftColumn">

    <img class="logo" src="./images/AT4.png" alt="logo"  width="150" height="auto"> 
    <p class="margins-needed" id="sessionname" data-value="<?php echo $_smarty_tpl->tpl_vars['sessionname']->value;?>
">Welcome <?php echo $_smarty_tpl->tpl_vars['sessionname']->value;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin" || $_smarty_tpl->tpl_vars['sessionrole']->value == "employer") {?>
        <button class="basic-button" onclick='redirect("newListing.php")'>Make new listing</button>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
        <button class="basic-button" onclick='redirect("newCompany.php")'>Enter new company</button>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?> <form id="delete-selected-users" method="post" action="userList.php"></form>
        <input class="basic-button" form="delete-selected-users" type="submit" name='deleteusersbtn' value="Delete selected users"/>
    <?php }?>
    <button class="basic-button" onclick='redirect("listings.php")'>Job listings</button>
    <button class="basic-button" onclick='redirect("user.php?id=<?php echo $_smarty_tpl->tpl_vars['sessionid']->value;?>
")'>My profile</button>
    <form id="logout" method="post" action="userList.php"></form>
        <input class="basic-button" form="logout" type="submit" name='logoutbtn' value="Log out"/>
    </div>

    <div class="rightColumn">

        <div class="spinner-container">
            <div class="spinner"></div>
        </div>

        <div class="searchBar">
            <input class="margins-needed" type="text" placeholder="Search for user with ID" id="search-value">
            <button id="searchbtn" onclick="showSpinner()">
                <img class="magglass" src="./images/magnifying-glass-2-64.png" alt="magnifying glass"> 
            </button>

        </div>

        <table>
            <thead class="margins-needed">
                <tr>
                                        <th>Last name</th>
                    <th>Username</th>
                    <th>E-mail</th>
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
                                        <td><a href="user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
</td> 
                    <td><a href="user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                    <td><a href="user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</a>  
                    <td><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?><td><input type="checkbox" form="delete-selected-users" name="checkbox<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"/></td><?php }?>
                <tr> 
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
