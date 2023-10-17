<?php
/* Smarty version 4.3.4, created on 2023-10-16 19:45:34
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d76be8a3d85_90808549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad8dccb78ea51ae97e85434ab5e68bb43c3ca69c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\detalle.tpl',
      1 => 1697477224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
    'file:app/templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_652d76be8a3d85_90808549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:app/templates/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
    <p class="fs-5 pt-4 m-4"><?php echo $_smarty_tpl->tpl_vars['autos']->value->caracteristicas;?>
</p>
    <a class="btn btn-primary m-4" href='home'>Volver</a>
  
</section>

<?php $_smarty_tpl->_subTemplateRender("file:app/templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
