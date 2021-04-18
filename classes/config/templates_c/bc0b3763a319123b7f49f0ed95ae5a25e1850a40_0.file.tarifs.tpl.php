<?php
/* Smarty version 3.1.39, created on 2021-03-27 19:19:20
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\tarifs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f77284fa383_90777928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc0b3763a319123b7f49f0ed95ae5a25e1850a40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\tarifs.tpl',
      1 => 1616770182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f77284fa383_90777928 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="style.css" />
<div id="registration">
    <div id="dashboard">
        <table>
            <tr>
                <th id="test">Prestation</th>
                <th id="test">Catégorie</th>
                <th id="test">Prix</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarifs']->value, 'tarif');
$_smarty_tpl->tpl_vars['tarif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarif']->value) {
$_smarty_tpl->tpl_vars['tarif']->do_else = false;
?>
                <tr>
                    <td id="test"><?php echo $_smarty_tpl->tpl_vars['tarif']->value['type_prest'];?>
</td>
                    <td id="test"><?php echo $_smarty_tpl->tpl_vars['tarif']->value['lib_categ'];?>
</td>
                    <td id="test"><?php echo $_smarty_tpl->tpl_vars['tarif']->value['prix'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</div><?php }
}
