<?php
/* Smarty version 4.1.1, created on 2022-09-28 10:29:32
  from 'C:\xampp\htdocs\RunnerApp\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_633405ec183531_80013026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58cb375f9d75cb9b770439a97ce0794ef760ec2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RunnerApp\\tpl\\index.tpl',
      1 => 1664291072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633405ec183531_80013026 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RunnerApp</title>

        <link type="text/css" rel="stylesheet" href="css/main.css">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="javascript/index.js"><?php echo '</script'; ?>
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
                <div class="card-login">
                    <div class="logo"><b>Prijava</b><br>unesite svoje podatke</div>
                    <div class="line"></div>
                    <div class="form">
                        <form id="form-login" action="index.php" method="post">
                            <input id="user" name="user" type="text" placeholder="korisničko ime">
                            <input id="userpass" name="userpass" type="password" placeholder="lozinka">
                        </form>
                        <div id="error" class="error"></div>
                        <input form="form-login" type="submit" value="Prijavi se">
                    </div>
                </div>
            </div>
            <div></div>
        </div>

    </body>
</html><?php }
}
