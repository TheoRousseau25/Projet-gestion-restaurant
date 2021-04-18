<?php
/* Smarty version 3.1.39, created on 2021-03-20 20:03:25
  from 'C:\xampp2\htdocs\php\TD5\TD5\classes\config\templates\components\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605646fd02f8b9_46500379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe1100406cfef0142d3b72cef10caa3b81487711' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\TD5\\TD5\\classes\\config\\templates\\components\\notifications.tpl',
      1 => 1616264617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605646fd02f8b9_46500379 (Smarty_Internal_Template $_smarty_tpl) {
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
