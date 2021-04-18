<?php
/* Smarty version 3.1.39, created on 2021-03-20 20:03:25
  from 'C:\xampp2\htdocs\php\TD5\TD5\classes\config\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605646fd06c830_91010188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56653a1e209519e26bc6dc74280543b05abc0e9c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\TD5\\TD5\\classes\\config\\templates\\layout.tpl',
      1 => 1616265120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/menu.tpl' => 1,
  ),
),false)) {
function content_605646fd06c830_91010188 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h1>AS - TD 5 - Utilisation de Smarty </h1>
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
