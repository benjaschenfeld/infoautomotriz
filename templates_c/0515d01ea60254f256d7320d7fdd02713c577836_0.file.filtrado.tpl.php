<?php
/* Smarty version 4.3.4, created on 2023-10-17 01:03:00
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\filtrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652dc124eb2ee0_29987891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0515d01ea60254f256d7320d7fdd02713c577836' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\filtrado.tpl',
      1 => 1697497373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
    'file:app/templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_652dc124eb2ee0_29987891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:app/templates/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autos']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>
    <p class="fs-5 pt-4 m-4"><?php echo $_smarty_tpl->tpl_vars['auto']->value->nombres;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<a class="btn btn-primary m-4" href='home'>Volver</a>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:app/templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
