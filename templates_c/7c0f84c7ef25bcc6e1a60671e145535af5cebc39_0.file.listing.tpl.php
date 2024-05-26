<?php
/* Smarty version 4.3.4, created on 2024-05-26 20:08:13
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66537a8da95306_06556889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c0f84c7ef25bcc6e1a60671e145535af5cebc39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\listing.tpl',
      1 => 1716746891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66537a8da95306_06556889 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/listing.css">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/grid1-2.css">
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/essentials.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/listings.js" defer><?php echo '</script'; ?>
>
    <title>Listing: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>
</head>
<body>

    <div class="container">

        <div class="leftColumn">

            <img class="logo" src="./images/AT4.png" alt="logo"  width="150" height="auto"> 
            <?php if (($_smarty_tpl->tpl_vars['employerid']->value == $_smarty_tpl->tpl_vars['sessionid']->value && $_smarty_tpl->tpl_vars['companyid']->value == $_smarty_tpl->tpl_vars['sessioncompanyid']->value) || $_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>
                <button class="basic-button" onclick="deleteListing(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)">Delete Listing</button>
            <?php }?>
            <button class="basic-button" onclick='redirect("listings.php")'>Listings</button>
            <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
            <button class="basic-button" onclick='redirect("user.php?id=<?php echo $_smarty_tpl->tpl_vars['sessionid']->value;?>
")'>My profile</button>

        </div>

        <div class="rightColumn">

            <div class="box">

                <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
                <h2>Listing information</h2>
                <h3>Job description:</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</p>
                <p><strong>Payment:</strong> <?php echo $_smarty_tpl->tpl_vars['payment']->value;?>
</p>

                <h3>Company information</h3>
                <p><strong>Name:</strong> <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</p>
                <p><strong>City:</strong> <?php echo $_smarty_tpl->tpl_vars['companycity']->value;?>
</p>
                <p><strong>Sector:</strong> <?php echo $_smarty_tpl->tpl_vars['companysector']->value;?>
</p>

                <h3>Employer information</h3>
                <p><strong>Full name:</strong> <?php echo $_smarty_tpl->tpl_vars['employersurname']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['employername']->value;?>
</p>
                <p><strong>Username:</strong> <?php echo $_smarty_tpl->tpl_vars['employerusername']->value;?>
</p> 
                <p><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['employeremail']->value;?>
</p>

                <h3>If you are interested in this listing, please contact the employer via email.</h3>

            </div>

        </div>

    </div>

</body><?php }
}
