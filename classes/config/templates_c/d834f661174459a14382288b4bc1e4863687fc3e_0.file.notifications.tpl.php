<?php
/* Smarty version 3.1.39, created on 2021-03-27 14:49:54
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\components\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f3802024df7_33253177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd834f661174459a14382288b4bc1e4863687fc3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\components\\notifications.tpl',
      1 => 1616264617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f3802024df7_33253177 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value, 'notification');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?>
    <div class='noty <?php echo $_smarty_tpl->tpl_vars['notification']->value['type'];?>
'><?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
