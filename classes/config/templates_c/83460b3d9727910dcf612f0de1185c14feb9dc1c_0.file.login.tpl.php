<?php
/* Smarty version 3.1.39, created on 2021-03-25 19:30:14
  from 'C:\xampp2\htdocs\php\TD5\TD5\classes\config\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605cd6b63f5708_13406326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83460b3d9727910dcf612f0de1185c14feb9dc1c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\TD5\\TD5\\classes\\config\\templates\\login.tpl',
      1 => 1616697013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/notifications.tpl' => 1,
  ),
),false)) {
function content_605cd6b63f5708_13406326 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registration">
    <?php if (!$_smarty_tpl->tpl_vars['isConnected']->value) {?>
        <form action="actions/login.php" method="post">
            <h3>Login</h3>
            <?php $_smarty_tpl->_subTemplateRender("file:components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notifications'=>$_smarty_tpl->tpl_vars['notifications']->value), 0, false);
?>
            
            <input type="text" name="login" placeholder="Login" />
            <input type="password" name="password" placeholder="Password" />
            <div class="actions">
                <input type="submit" value="Log me !" class="primary btn" />
            </div>
        </form>
    <?php } else { ?>
        <div id="dashboard">
            <h3>Dashboard</h3>
            <a href="edit.php">Edit my account</a>
        </div>
    <?php }?>
</div><?php }
}
