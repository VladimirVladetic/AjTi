<?php
/* Smarty version 4.3.4, created on 2024-04-23 15:59:15
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6627beb38f2255_68736647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c0f84c7ef25bcc6e1a60671e145535af5cebc39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\listing.tpl',
      1 => 1713880753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6627beb38f2255_68736647 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>Listing: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>
</head>
<body>

    <div class="container">

        <div class="leftColumn">

            <img class="logo" src="./images/AT4.png" alt="logo"  width="150" height="auto"> 
            <a href="listings.php" class="button-link">
                <button class="basic-button">Job listings</button>
            </a>
            <a href="userList.php" class="button-link">
                <button class="basic-button">User list</button>
            </a>

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

            </div>

        </div>

    </div>

</body><?php }
}