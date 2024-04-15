<?php
/* Smarty version 4.3.4, created on 2024-04-15 08:56:46
  from 'C:\xampp\htdocs\smarty-4.3.4\AjTi\templates\newCompany.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661ccfae7e5db4_95259912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36fd206ce08989b5a85da599206c40e21f859043' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.4\\AjTi\\templates\\newCompany.tpl',
      1 => 1713164201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ccfae7e5db4_95259912 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/essentials.css">
    <link rel="stylesheet" href="./styles/newCompany.css">
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <title>Enter new company</title>
</head>

<body>

    <div class="central-container">

        <?php if ($_smarty_tpl->tpl_vars['sessionrole']->value == "admin") {?>

            <h1>Enter new company information</h1>  

            <label for="input-company-name">Company name:</label><br>
            <input type="text" placeholder="Enter company name" id="input-company-name"><br>

            <label for="input-company-city">Company city:</label><br>
            <input type="text" placeholder="Enter company city" id="input-company-city"><br>

            <label for="input-company-country">Company country:</label><br>
            <input type="text" placeholder="Enter company country" id="input-company-country"><br>

            <label for="input-company-sector">Company sector:</label><br>
            <input type="text" placeholder="Enter company sector" id="input-company-sector"><br>

            <label for="input-company-employerid">Company employer id:</label><br>
            <input type="int" placeholder="Enter company employer id" id="input-company-employerid"><br>

        <?php }?>

    </div>

</body><?php }
}
