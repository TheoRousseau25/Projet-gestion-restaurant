<?php
/* Smarty version 3.1.39, created on 2021-03-20 20:14:04
  from 'C:\xampp2\htdocs\php\TD5\TD5\classes\config\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6056497c752a34_67211955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '378017a0eb168fe43f30ea46a91546a9cccd7981' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\php\\TD5\\TD5\\classes\\config\\templates\\contact.tpl',
      1 => 1616267643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/notifications.tpl' => 1,
  ),
),false)) {
function content_6056497c752a34_67211955 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registration">
    <form action="actions/contact.php" method="post">
        <h3>Contact - <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</h3>
        <?php $_smarty_tpl->_subTemplateRender("file:components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notifications'=>$_smarty_tpl->tpl_vars['notifications']->value), 0, false);
?>
        
        <input type="text" name="title" placeholder="Message title" />
        <textarea name="message" placeholder="Your message" ></textarea>
        <div class="actions">
            <input type="submit" value="Log me !" class="primary btn" />
        </div>
    </form>
</div><?php }
}
