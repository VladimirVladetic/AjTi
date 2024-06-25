<?php
/* Smarty version 4.3.4, created on 2024-06-25 16:43:35
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\listings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_667ad797b828e2_15837175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc889630f5f72af7e79e9ed9996c365d52a20e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\listings.tpl',
      1 => 1719326601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667ad797b828e2_15837175 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="grid" rel="stylesheet" href="./styles/grid1-2.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/listings.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/enterLog.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/essentials.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/listings.js" defer><?php echo '</script'; ?>
>
    <title>Job listings</title>
</head>

<body onload="enterLog(<?php echo $_smarty_tpl->tpl_vars['logsent']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['attempts']->value;?>
)">

    <div class="container">

        <div class="leftColumn">

            <img class="logo" src="./images/AT4.png" alt="logo"> 
            <p class="margins-needed" id="sessionname" data-value="<?php echo $_smarty_tpl->tpl_vars['sessionusername']->value;?>
">Welcome <?php echo $_smarty_tpl->tpl_vars['sessionname']->value;?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin" || $_smarty_tpl->tpl_vars['sessionrole']->value == "employer") {?>
                <button class="basic-button" onclick='redirect("newListing.php")'>Make new listing</button>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
                <button class="basic-button" onclick='redirect("newCompany.php")'>Enter new company</button>
            <?php }?>
            <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
            <button class="basic-button" onclick='redirect("user.php?id=<?php echo $_smarty_tpl->tpl_vars['sessionid']->value;?>
")'>My profile</button>
            <form id="logout" method="post" action="userList.php"></form>
            <input class="basic-button" form="logout" type="submit" name='logoutbtn' value="Log out"/>
        
        </div>


        <div class="rightColumnListings">

            <div class="searchBar">
                <select name="company" id="info-company">
                    <option value="Any">Any</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companydata']->value, 'company');
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
                <button id="searchbtn">
                    <img class="magglass" src="./images/magnifying-glass-2-64.png" alt="magnifying glass"> 
                </button>
            </div>

            <div class="listingsList">
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listingdata']->value, 'listing');
$_smarty_tpl->tpl_vars['listing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->do_else = false;
?> 
                <tr> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companydata']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['company']->value['id'] == $_smarty_tpl->tpl_vars['listing']->value['companyid']) {?>
                        <?php $_smarty_tpl->_assignInScope('companyname', $_smarty_tpl->tpl_vars['company']->value['name']);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userdata']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['listing']->value['employerid']) {?>
                        <?php $_smarty_tpl->_assignInScope('employername', $_smarty_tpl->tpl_vars['user']->value['name']);?>
                        <?php $_smarty_tpl->_assignInScope('employerid', $_smarty_tpl->tpl_vars['user']->value['id']);?>
                        <?php $_smarty_tpl->_assignInScope('employersurname', $_smarty_tpl->tpl_vars['user']->value['surname']);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <div class="listing-container" onclick='redirect("listing.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
")' 
                    data-company-name="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
">

                        <h2><?php echo $_smarty_tpl->tpl_vars['listing']->value['name'];?>
</h2>
                        <p>Company: <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</p>
                        <p>
                            Employer:<?php echo $_smarty_tpl->tpl_vars['employername']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['employersurname']->value;?>
</a>
                        </p>
                        <p>Payment in euros: <?php echo $_smarty_tpl->tpl_vars['listing']->value['payment'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['listing']->value['smalldesc'];?>
</p>

                    </div>
                <tr> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        
        </div>

    </div>

</body>
</html><?php }
}
