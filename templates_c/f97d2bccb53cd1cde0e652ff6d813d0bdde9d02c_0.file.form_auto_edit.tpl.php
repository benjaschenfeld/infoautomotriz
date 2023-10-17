<?php
/* Smarty version 4.3.4, created on 2023-10-17 00:56:16
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\form_auto_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652dbf90e2a878_49570140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f97d2bccb53cd1cde0e652ff6d813d0bdde9d02c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\form_auto_edit.tpl',
      1 => 1697496974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
  ),
),false)) {
function content_652dbf90e2a878_49570140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Editar</h1>
<div class="container">
    <div class="p-4 bg-light mt-3">
        <form class="g-3 mt-2" method="POST" action="editItem/<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
">
            <div class="mb-4">
                <input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->nombres;?>
" placeholder="Nombre:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->anio;?>
" name="anio" placeholder="Anio:"></input>
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="motor" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->motor;?>
" placeholder="Motor:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->marca;?>
" placeholder="Marca:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="caracteristicas" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->caracteristicas;?>
" placeholder="Caracteristicas:">
            </div>
            <div class="mb-4">
                <label for="categoria" class="form-label fs-5">CATEGORIA</label>
                <select class="form-select" name="categoria">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

            <button class="btn btn-badge text-bg-success">ENVIAR</button>
            <button class="btn btn-primary"><a href="home">VOLVER</a></button>
        </form>
    </div>
</div><?php }
}
