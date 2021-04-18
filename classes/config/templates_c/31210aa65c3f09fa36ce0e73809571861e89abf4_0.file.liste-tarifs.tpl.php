<?php
/* Smarty version 3.1.39, created on 2021-03-27 19:42:14
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\liste-tarifs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f7c86dd84c6_56900050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31210aa65c3f09fa36ce0e73809571861e89abf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\liste-tarifs.tpl',
      1 => 1616870532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f7c86dd84c6_56900050 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title>TP6 - Smarty</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="global" style ="display: table; margin-top: 100; margin : auto; margin-top : 100" >
      <h3 style="text-decoration:underline;">Liste tarifs</h3>
	  
	  <table style="border:black 2px solid;">
		<tr>
			<th style="padding:10px; text-align:center;">Prestation</th>
			<th style="padding:10px; text-align:center;">Catégorie</th>
			<th style="padding:10px; text-align:center;">Prix</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarifs']->value, 'tarif');
$_smarty_tpl->tpl_vars['tarif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarif']->value) {
$_smarty_tpl->tpl_vars['tarif']->do_else = false;
?>
			<tr>
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['tarif']->value['type_prest'];?>
</td>
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['tarif']->value['lib_categ'];?>
</td>			
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['tarif']->value['prix'];?>
</td>					
			</tr>		
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </table>
    
		
      
      <div class="content">
   
      </div>
    </div>
  </body>
</html><?php }
}
