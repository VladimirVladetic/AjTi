<?php
/* Smarty version 4.3.4, created on 2024-06-25 16:19:55
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667ad20bb26fa6_78428769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0da77831dd5fc3b77aa3c8fe4770245592ce60d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\user.tpl',
      1 => 1719325190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667ad20bb26fa6_78428769 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/user.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/changeUser.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/essentials.js" defer><?php echo '</script'; ?>
>
    <title>User page for <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>
</head>
<body>

    <div class="container">

    <div class="leftColumn">

    
        <div id="user-holder" data-value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div>

        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
            <form class="margins-needed" id="update-user-form" method="post" action="user.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <p>Username: </p>
                <input class="input-text" id="info-username" type="text" name="username" placeholder="Enter username." <?php if ((isset($_smarty_tpl->tpl_vars['username']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" <?php }?>>
                <p>Name: </p>
                <input class="input-text" id="info-name" type="text" name="name" placeholder="Enter name." <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php }?>>
                <p>Surname: </p>
                <input class="input-text" id="info-surname" type="text" name="surname" placeholder="Enter surname." <?php if ((isset($_smarty_tpl->tpl_vars['surname']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" <?php }?>>
                <p>E-mail: </p>
                <input class="input-text" id="info-email" type="email" name="email" placeholder="Enter e-mail." <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" <?php }?>>
                <p>Year of birth: </p>
                <input class="input-text" id="info-yearofbirth" type="number" name="yearofbirth" placeholder="Enter year of birth."<?php if ((isset($_smarty_tpl->tpl_vars['yearofbirth']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['yearofbirth']->value;?>
" <?php }?>>
                                <p>Company: <?php if ((isset($_smarty_tpl->tpl_vars['companyname']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php }?></p>
                <p>Role: <?php if ((isset($_smarty_tpl->tpl_vars['role']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
 <?php }?></p>
            </form>
            <button class="basic-button" form="update-user-form" id="update-info-button">Update user information</button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "user" || $_smarty_tpl->tpl_vars['sessionrole']->value == "employer") {?>
                    <h2 class="margins2-needed">Name: <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?></h2>
                    <h2 class="margins2-needed">Surname: <?php if ((isset($_smarty_tpl->tpl_vars['surname']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
 <?php }?></h2>
                    <h2 class="margins2-needed">Year of birth: <?php if ((isset($_smarty_tpl->tpl_vars['yearofbirth']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['yearofbirth']->value;?>
 <?php }?></h2>
                    <h2 class="margins2-needed">Company: <?php if ((isset($_smarty_tpl->tpl_vars['companyname']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php }?></h2>
                    <h2 class="margins2-needed">Role: <?php if ((isset($_smarty_tpl->tpl_vars['role']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
 <?php }?></h2>
        <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
            <button class="basic-button" onclick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)">Delete user</button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin" || ($_smarty_tpl->tpl_vars['sessionrole']->value == "employer" && ($_smarty_tpl->tpl_vars['companyid']->value == $_smarty_tpl->tpl_vars['sessioncompanyid']->value || $_smarty_tpl->tpl_vars['companyid']->value == 8))) {?>
            <button class="basic-button" onclick="openChangeCompanyPopup()">Change company</button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin" || ($_smarty_tpl->tpl_vars['sessionrole']->value == "employer" && $_smarty_tpl->tpl_vars['companyid']->value == $_smarty_tpl->tpl_vars['sessioncompanyid']->value)) {?>
            <button class="basic-button" onclick="openChangeRolePopup()">Change role</button>
        <?php }?>
        <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
        <button class="basic-button" onclick='redirect("listings.php")'>Job listings</button>

    </div>

    <div class="rightColumn">
        <h1 id="h1CV">User CV:</h1>
        <iframe id="pdfViewer" src="viewer.php?file=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.pdf"></iframe>
        <button class="download-button" onclick="downloadPDF(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)">
            <img class="download" src="./images/downloadIcon.png" alt="Download icon">   
        </button>
    </div>

    </div>

    <div class="overlay" id="overlay"></div>
        <div class="popup-container" id="popup">
            <h2 class="black-text">Change company</h2>
            <label for="dropdown">Select a company:</label>
            <select id="dropdown">
                <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
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
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "employer") {?>
                    <option value="Unemployed">Unemployed</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['sessioncompanyname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sessioncompanyname']->value;?>
</option>
                <?php }?>
            </select>
            <button class="basic-button" onclick="submitChange()">Submit</button>
            <button class="basic-button" onclick="closePopup()">Close</button>
        </div>
    </div>

    <div class="overlay" id="overlay-role"></div>
        <div class="popup-container" id="popup-role">
            <h2 class="black-text">Change role</h2>
            <label for="dropdown-role">Select a role:</label>
            <select id="dropdown-role">
                <option value="user">User</option>
                <option value="employer">Employer</option>
                <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
                    <option value="admin">Admin</option>
                <?php }?>
            </select>
            <button class="basic-button" onclick="submitChangeRole()">Submit</button>
            <button class="basic-button" onclick="closePopup()">Close</button>
        </div>
    </div>

</body>
</html><?php }
}
