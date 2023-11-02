<?php
/* Smarty version 4.3.4, created on 2023-10-20 23:19:44
  from 'C:\xampp\htdocs\infoautomotriz\app\Templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532eef0357034_40896918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e532f4ca2502be6e8668b53bdcd1c767f3606240' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\Templates\\contacto.tpl',
      1 => 1697549274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
    'file:app/templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_6532eef0357034_40896918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center shadow p-3 mb-5 bg-body rounded"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="text-center">
    <ul class="list-group p-4">
        <li class="list-group-item badge text-bg-danger">INSTAGRAM</li>
        <li class="list-group-item badge text-bg-info">FACEBOOK</li>
        <li class="list-group-item badge text-bg-primary">GitHub</li>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:app/templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
