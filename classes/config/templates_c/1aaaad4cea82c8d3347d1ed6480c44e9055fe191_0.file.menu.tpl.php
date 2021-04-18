<?php
/* Smarty version 3.1.39, created on 2021-03-27 22:09:46
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\components\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f9f1ac90385_83457430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aaaad4cea82c8d3347d1ed6480c44e9055fe191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\components\\menu.tpl',
      1 => 1616879383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f9f1ac90385_83457430 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="actions">
    <?php if (!$_smarty_tpl->tpl_vars['isConnected']->value) {?>
        <li><a href="login.php">Connexion</a></li>
    <?php } else { ?>
        <li><a href="tableauUsagers.php">Liste des usagers</a></li>
		<li><a href="tableauTarifs.php">Liste des tarifs</a></li>
		<li><a href="creerUsager.php">Créer un nouvel usager</a></li>
        <li><a href="actions/logout.php">Déconnexion</a></li>
    <?php }?>
 
</ul><?php }
}
