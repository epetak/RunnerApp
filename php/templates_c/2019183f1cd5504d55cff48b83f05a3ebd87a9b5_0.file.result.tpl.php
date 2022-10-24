<?php
/* Smarty version 4.1.1, created on 2022-09-30 10:26:55
  from 'C:\xampp\htdocs\RunnerApp\tpl\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6336a84f2c4c01_68432016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2019183f1cd5504d55cff48b83f05a3ebd87a9b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RunnerApp\\tpl\\result.tpl',
      1 => 1664526110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6336a84f2c4c01_68432016 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RunnerApp</title>

        <link type="text/css" rel="stylesheet" href="../css/main.css">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../javascript/result.js"><?php echo '</script'; ?>
>
    </head>

    <body>
        
        <div class="main-grid">
            <div>
                <div class="background-menu">
                    <div class="logo"><b>RunnerApp</b><br>obrada rezultata</div>
                    <div class="line"></div>
                    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

                </div>
            </div>
            <div>
                <div id="add-card" class="background-card">
                    <div class="form">
                        <form id="form-result">
                            <input id="number" type="text" placeholder="Startni broj" required>
                            <input id="time" type="text" placeholder="Vrijeme" required>
                        </form>
                        <select name="race" id="race">
                            <option value="1">11. Cross utrka Bedenec 2022.</option>
                            <option value="2">1. Vatrogasna utrka Bedenec 2022.</option>
                            <option value="3">Utrka građana - 6km</option>
                        </select>
                    </div>
                    <div id="error" class="error"></div>
                    <input style="margin-left: 20px;" id="addResult" type="submit" class="btn-add" form="form-result" value="Upiši rezultat">
                    <input id="quitBtn" type="reset" class="btn-quit" form="form-result" value="Odustani">
                </div>
            </div>
            <div></div>
        </div>

    </body>
</html><?php }
}
