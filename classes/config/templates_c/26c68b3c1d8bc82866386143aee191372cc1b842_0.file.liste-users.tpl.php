<?php
/* Smarty version 3.1.39, created on 2021-03-27 15:59:31
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\liste-users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f48531d7e57_78240498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c68b3c1d8bc82866386143aee191372cc1b842' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\liste-users.tpl',
      1 => 1616857169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f48531d7e57_78240498 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title>TP6 - Smarty</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="global" style ="display: table; margin-top: 100; margin : auto; margin-top : 100" >
      <h3 style="text-decoration:underline;">Liste usagers</h3>
	  
	  <table style="border:black 2px solid;">
		<tr>
			<th style="padding:10px; text-align:center;">Nom</th>
			<th style="padding:10px; text-align:center;">N° Carte</th>
			<th style="padding:10px; text-align:center;">Libellé catégorie</th>
			<th style="padding:10px; text-align:center;">Date carte</th>
			<th style="padding:10px; text-align:center;">Montant caution</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usagers']->value, 'usager');
$_smarty_tpl->tpl_vars['usager']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usager']->value) {
$_smarty_tpl->tpl_vars['usager']->do_else = false;
?>
			<tr>
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['usager']->value['nom'];?>
</td>
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['usager']->value['num_carte'];?>
</td>			
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['usager']->value['lib_categ'];?>
</td>			
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['usager']->value['date_carte'];?>
</td>			
				<td style="padding:10px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['usager']->value['mt_caution'];?>
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
