<?php
/* Smarty version 4.3.4, created on 2023-10-17 00:40:09
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\form_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652dbbc9c2e619_09877689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669423f6b049cba82eaab32ab08394f38f2d3d60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\form_categorias.tpl',
      1 => 1697496007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652dbbc9c2e619_09877689 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Formulario para categorias</h1>
<div class="container">
    <div class="p-4 bg-light mt-3">
        <form class="g-3 mt-2" method="POST" action="addCategoria">
            <div class="mb-4">
                <textarea type="text" class="form-control" name="nombre" placeholder="Nombre:"></textarea>
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="caracteristicas" placeholder="Caracteristicas:">
            </div>
            
            <button class="btn btn-badge text-bg-success">ENVIAR</button>
        </form>
    </div>
</div>
</section><?php }
}
