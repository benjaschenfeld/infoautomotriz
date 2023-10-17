<?php
/* Smarty version 4.3.4, created on 2023-10-12 22:44:08
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\form_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65285a98915f72_44906226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9025a2b02abadb09fdd5f5e424e3646b8cd12cce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\form_login.tpl',
      1 => 1697143328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
    'file:app/templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_65285a98915f72_44906226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:app/templates/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Accede a tu Cuenta</h1>
<div class="container">
    <div class="p-4 bg-dark mt-3">
        <form class="g-3 mt-2" method="POST" action="validar">
            <div class="mb-4">
                <label for="nombre" class="form-label text-white fs-4">EMAIL</label>
                <input type="text" class="form-control" name="email" placeholder="@:" id="email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label text-white fs-4">PASSWORD</label>
                <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña:" id="password">
            </div>

            <button class="btn btn-primary">LOGIN</button>
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:app/templates/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
