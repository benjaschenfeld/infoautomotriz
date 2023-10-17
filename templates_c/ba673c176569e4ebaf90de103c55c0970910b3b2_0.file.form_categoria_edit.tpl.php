<?php
/* Smarty version 4.3.4, created on 2023-10-17 01:24:25
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\form_categoria_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652dc62957cff6_90637852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba673c176569e4ebaf90de103c55c0970910b3b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\form_categoria_edit.tpl',
      1 => 1697498658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
  ),
),false)) {
function content_652dc62957cff6_90637852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
    <h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Editar</h1>
    <div class="container">
        <div class="p-4 bg-light mt-3">
            <form class="g-3 mt-2" method="POST" action="editCategoria/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <div class="mb-4">
                    <input type="text" class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 name="nombre" placeholder="Nombre:">
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" name="caracteristicas" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->caracteristicas;?>
" placeholder="caracteristicas:">
                </div>

                <button class="btn btn-badge text-bg-success">ENVIAR</button>
                <button class="btn btn-primary">VOLVER</button>
            </form>
        </div>
    </div>
</section><?php }
}
