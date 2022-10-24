<?php
/* Smarty version 4.1.1, created on 2022-09-28 16:28:53
  from 'C:\xampp\htdocs\RunnerApp\tpl\race.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63345a25d8c351_89703220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7690e0d42c4003e44d87d31ee36566dce2a2dca9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RunnerApp\\tpl\\race.tpl',
      1 => 1664374505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63345a25d8c351_89703220 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="../javascript/race.js"><?php echo '</script'; ?>
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
                    <h2>Utrka građana - 6 km</h2>
                    <div style="border-top: 1px solid gray;margin: 10px 0 10px 0;width: 30%;"></div>
                    <p>Rezultati</p>
                </div>
                <div id="back-card" class="background-card">
                    <div class="card-header"><p class="short">R.b.</p><p class="short">Startni broj</p><p class="long">Ime i prezime</p><p class="short">Spol</p>
                        <p class="long1">Datum rođenja</p><p class="long">Klub</p><p class="short">Rezultat</p>
                    </div>
                </div>
            </div>
            <div></div>
        </div>

    </body>
</html><?php }
}
