<?php
/* Smarty version 4.3.4, created on 2023-10-17 15:06:33
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\tablaCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652e86d956f464_69751048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2074facf5ef9dc988b1dc85981b88559b3d209f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\tablaCategorias.tpl',
      1 => 1697547983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/form_categorias.tpl' => 1,
    'file:app/templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_652e86d956f464_69751048 (Smarty_Internal_Template $_smarty_tpl) {
?><section>

<h1 class="text-center shadow-sm p-3 mb-6 bg-body rounded">Lista de Categorias</h1>
<?php if (!(isset($_SESSION['IS_LOGGED']))) {?>
    <p class="p-5 fs-5">Aqui mostraremos informacion sobre algunos ejemplos de autos que pertenecen a algunas de estas categorias. En cada auto vamos a mostrar: Su nombre correspondiente (u apodos), breve descripcion del modelo, el nombre del modelo y la marca del fabricante y proveedor</p>
<?php }?>
<table class="table text-center table-striped">
    <thead class="bg-dark text-white">
        <tr>
            <th>Nombre</th>
            <th>Filtrar</th>
            <th>Caracteristicas</th>
            <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                <th>BORRAR</th>
                <th>EDITAR</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <tr class="fs-5">
            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</td>
            <td><a class="btn btn-primary" href="filtrar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Filtrar</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->caracteristicas;?>
</td>
            <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                <td><a class="btn btn-badge text-bg-danger" href="deleteCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">BORRAR</a></td>
                <td><a class="btn btn-badge text-bg-warning" href="formEditCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">EDITAR</a></td>
            <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
</section>

<?php if ((isset($_SESSION['IS_LOGGED']))) {
$_smarty_tpl->_subTemplateRender("file:app/templates/form_categorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:app/templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
