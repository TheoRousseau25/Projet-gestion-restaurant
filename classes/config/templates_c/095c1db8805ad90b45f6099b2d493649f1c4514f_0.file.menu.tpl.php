<?php
/* Smarty version 3.1.39, created on 2021-03-25 19:28:23
  from 'C:\xampp2\htdocs\php\TD5\TD5\classes\config\templates\components\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605cd647890457_72368703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '095c1db8805ad90b45f6099b2d493649f1c4514f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\TD5\\TD5\\classes\\config\\templates\\components\\menu.tpl',
      1 => 1616696901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605cd647890457_72368703 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="actions">
    <?php if (!$_smarty_tpl->tpl_vars['isConnected']->value) {?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Sign in</a></li>
    <?php } else { ?>
        <li><a href="edit.php">My account</a></li>
        <li><a href="actions/logout.php">Logout</a></li>
    <?php }?>
    <li><a href="contact">Contact</a></li>
</ul><?php }
}
