<?php
/* Smarty version 4.1.1, created on 2022-10-14 13:18:28
  from 'C:\xampp\htdocs\RunnerApp\tpl\firerace.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_634945842711f4_46130356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5544d39e07d37f2c14ac40705983494915094ace' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RunnerApp\\tpl\\firerace.tpl',
      1 => 1665746301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634945842711f4_46130356 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="../javascript/firerace.js"><?php echo '</script'; ?>
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
                    <h2>1. Vatrogasna utrka Bedenec 2022.</h2>
                    <div style="border-top: 1px solid gray;margin: 10px 0 10px 0;width: 30%;"></div>
                    <p style="margin-bottom: 20px;">Rezultati</p>
                    <label>Filtriraj:</label>
                    <select id="filter1">
                        <option value="0">Ukupno</option>
                        <option value="1">MS1</option>
                        <option value="2">ŽS1</option>
                        <option value="3">MS2</option>
                        <option value="4">ŽS2</option>
                        <option value="5">MV1</option>
                        <option value="6">ŽV1</option>
                        <option value="7">MV2</option>
                        <option value="8">ŽV2</option>
                        <option value="9">MV3</option>
                        <option value="10">ŽV3</option>
                    </select>
                </div>
                <div id="back-card" class="background-card">
                    <div class="card-header"><p class="short">R.b.</p><p class="short">Startni broj</p><p class="long">Ime i prezime</p><p class="short">Spol</p>
                        <p class="long1">Datum rođenja</p><p class="long1">Kategorija</p><p class="long">Klub</p><p class="short">Rezultat</p>
                    </div>
                </div>
                <div id="back2-card" class="background-card">
                    <div class="card-header"><p class="long">Ekipa</p><p class="long">Vrijeme</p></div>
                    
                </div>
            </div>
            <div></div>
        </div>
    </body>
</html><?php }
}
