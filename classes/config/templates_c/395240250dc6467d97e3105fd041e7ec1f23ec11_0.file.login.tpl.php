<?php
/* Smarty version 3.1.39, created on 2021-03-27 22:14:11
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605fa023adaca4_64732973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395240250dc6467d97e3105fd041e7ec1f23ec11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\login.tpl',
      1 => 1616879648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/notifications.tpl' => 1,
  ),
),false)) {
function content_605fa023adaca4_64732973 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registration">
    <?php if (!$_smarty_tpl->tpl_vars['isConnected']->value) {?>
        <form action="actions/login.php" method="post">
            <h3>Connexion</h3>
            <?php $_smarty_tpl->_subTemplateRender("file:components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notifications'=>$_smarty_tpl->tpl_vars['notifications']->value), 0, false);
?>
            
            <input type="text" name="login" placeholder="Nom d'utilisateur" />
            <input type="password" name="password" placeholder="Mot de passe" />
            <div class="actions">
                <input type="submit" value="Connexion" class="primary btn" />
            </div>
        </form>
    <?php } else { ?>
        <div id="dashboard">
            <h3>Bienvenue, chef !</h3>
            <img class="fit-picture"
            src="images/etchebest.jpg" height="500" width="500" 
            alt="Etch et best">
        </div>
    <?php }?>
</div><?php }
}
