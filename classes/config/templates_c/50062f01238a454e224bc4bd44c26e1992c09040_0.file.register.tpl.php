<?php
/* Smarty version 3.1.39, created on 2021-03-27 23:06:00
  from 'C:\xampp\htdocs\tpnote\classes\config\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605fac48be9c32_93035807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50062f01238a454e224bc4bd44c26e1992c09040' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpnote\\classes\\config\\templates\\register.tpl',
      1 => 1616882758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/notifications.tpl' => 1,
  ),
),false)) {
function content_605fac48be9c32_93035807 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registration">
    <form action="actions/creer.php" method="post">
        <h3>Créer un usager</h3>
        <?php $_smarty_tpl->_subTemplateRender("file:components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notifications'=>$_smarty_tpl->tpl_vars['notifications']->value), 0, false);
?>

        <input type="text" name="nom" placeholder="Nom" />
        <input type="text" name="num_carte" placeholder="Numéro de carte" />
        <input type="text" name="num_categ" placeholder="Numéro de catégorie" />
        <input type="date" name="date_carte" placeholder="Date de la carte" />
		<input type="text" name="mt_caution" placeholder="Montant de la caution" />
        <div class="actions">
            <input type="submit" value="Enregistrer" class="primary btn" />
        </div>
    </form>
</div>
<?php }
}
