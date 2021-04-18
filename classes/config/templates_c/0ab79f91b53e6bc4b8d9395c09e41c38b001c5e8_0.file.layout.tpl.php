<?php
/* Smarty version 3.1.39, created on 2021-03-27 16:05:45
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f49c91159e9_21597602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab79f91b53e6bc4b8d9395c09e41c38b001c5e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\layout.tpl',
      1 => 1616857541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/menu.tpl' => 1,
  ),
),false)) {
function content_605f49c91159e9_21597602 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="./lib/style.less" />
    <?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/npm/less@3.13"><?php echo '</script'; ?>
>
    <title>Register</title>
</head>

<body>
    <div id="content">
        <div id="app">
            <header>
                <h1>Gestion du restaurant </h1>
                <?php $_smarty_tpl->_subTemplateRender("file:components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isConnected'=>$_smarty_tpl->tpl_vars['isConnected']->value), 0, false);
?>
            </header>
            <div id="middle">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>
    </div>
</body>

</html><?php }
}
