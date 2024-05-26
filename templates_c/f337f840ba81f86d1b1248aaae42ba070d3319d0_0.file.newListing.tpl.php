<?php
/* Smarty version 4.3.4, created on 2024-05-26 19:36:44
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\newListing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6653732c6d22f8_06510074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f337f840ba81f86d1b1248aaae42ba070d3319d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\newListing.tpl',
      1 => 1716744988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6653732c6d22f8_06510074 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/newEntity.css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/essentials.js" defer><?php echo '</script'; ?>
>
    <title>Make listing</title>
</head>

<body>

    <div class="central-container">

        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin" || $_smarty_tpl->tpl_vars['sessionrole']->value == "employer") {?>

            <h1>Enter new listing information</h1>  

                <form id="insert-listing-form" method="post" action="newListing.php">

                <label for="input-listing-name">Listing name:</label><br>
                <input type="text" name="name" placeholder="Enter listing name" id="input-listing-name"><br>

                <label for="input-listing-city">Small description:</label><br>
                <textarea type="text" name="smalldesc" placeholder="Enter listing small description" id="input-listing-smalldesc"></textarea><br>

                <label for="input-listing-country">Information:</label><br>
                <textarea type="text" name="info" placeholder="Enter listing information" id="input-listing-info"></textarea><br>

                <label for="input-listing-sector">Payment in euros:</label><br>
                <input type="text" name="payment" placeholder="Enter listing payment in format eg. (amount) per hour" id="input-listing-payment"><br>

            </form>

            <div class="button-container">
                <button class="basic-button" form="insert-listing-form" id="enter-info-button">Enter Information</button>
                <button class="basic-button" onclick='redirect("userList.php")'>User list</button>
                <button class="basic-button" onclick='redirect("listings.php")'>Job listings</button>
            </div>

        <?php }?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['listingexists']->value == 1) {?>
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Listing exists in database.</p>
        </div> 
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['invalidInfo']->value == 1) {?>
        <div class="alert" id="failAlert" style="display: block;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="alertText">Enter all listing information.</p>
        </div> 
    <?php }?>

</body><?php }
}
