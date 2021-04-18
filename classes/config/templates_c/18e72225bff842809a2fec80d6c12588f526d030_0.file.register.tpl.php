<?php
/* Smarty version 3.1.39, created on 2021-03-20 20:03:50
  from 'C:\xampp2\htdocs\php\TD5\TD5\classes\config\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60564716ebbd30_65401797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e72225bff842809a2fec80d6c12588f526d030' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\TD5\\TD5\\classes\\config\\templates\\register.tpl',
      1 => 1616265646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/notifications.tpl' => 1,
  ),
),false)) {
function content_60564716ebbd30_65401797 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registration">
    <form action="actions/register.php" method="post">
        <h3>Register</h3>
        <?php $_smarty_tpl->_subTemplateRender("file:components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notifications'=>$_smarty_tpl->tpl_vars['notifications']->value), 0, false);
?>

        <input type="text" name="firstname" placeholder="First name" />
        <input type="text" name="lastname" placeholder="Last name" />
        <input type="text" name="login" placeholder="Login" />
        <input type="password" name="password" placeholder="Password" />
        <div class="actions">
            <input type="submit" value="Register" class="primary btn" />
        </div>
    </form>
</div>
<?php }
}
