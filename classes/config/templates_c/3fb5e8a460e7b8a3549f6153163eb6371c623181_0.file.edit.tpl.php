<?php
/* Smarty version 3.1.39, created on 2021-03-25 19:43:48
  from 'C:\xampp2\htdocs\php\TD5\TD5\classes\config\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605cd9e4836c90_77307736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb5e8a460e7b8a3549f6153163eb6371c623181' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\TD5\\TD5\\classes\\config\\templates\\edit.tpl',
      1 => 1616697827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/notifications.tpl' => 1,
  ),
),false)) {
function content_605cd9e4836c90_77307736 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registration">
    <form action="actions/edit.php" method="post">
        <h3>My profile</h3>
        <?php $_smarty_tpl->_subTemplateRender("file:components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notifications'=>$_smarty_tpl->tpl_vars['notifications']->value), 0, false);
?>

        <input type="text" name="firstname" placeholder="First name" value='<?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
' />
        <input type="text" name="lastname" placeholder="Last name" value='<?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
' />
        <input type="password" name="password" placeholder="Password" value='<?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
' />

        <div class="actions">
            <input type="submit" value="Update" class="btn primary" />
        </div>
    </form>
</div><?php }
}
