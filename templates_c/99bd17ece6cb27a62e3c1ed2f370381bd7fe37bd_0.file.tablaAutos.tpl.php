<?php
/* Smarty version 4.3.4, created on 2023-10-17 00:54:55
  from 'C:\xampp\htdocs\infoautomotriz\app\templates\tablaAutos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652dbf3f55ee66_40010958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bd17ece6cb27a62e3c1ed2f370381bd7fe37bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\infoautomotriz\\app\\templates\\tablaAutos.tpl',
      1 => 1697496889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templates/layout/header.tpl' => 1,
    'file:app/templates/layout/carrousel.tpl' => 1,
    'file:app/templates/form_autos.tpl' => 1,
  ),
),false)) {
function content_652dbf3f55ee66_40010958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:app/templates/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:app/templates/layout/carrousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
<h1 class="text-center shadow-sm p-3 mb-6 bg-body rounded">Lista de Autos</h1>
<?php if (!(isset($_SESSION['IS_LOGGED']))) {?>
    <p class="p-5 fs-5">Aqui mostraremos informacion sobre algunos ejemplos de autos que pertenecen a algunas de estas categorias. En cada auto vamos a mostrar: Su nombre correspondiente (u apodos), breve descripcion del modelo, el nombre del modelo y la marca del fabricante y proveedor</p>
<?php }?>
<table class="table text-center table-striped">
    <thead class="bg-dark text-white">
        <tr>
            <th>Nombres</th>
            <th>Anio</th>
            <th>Motor</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Detalle</th>
            
            <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                <th>BORRAR</th>
                <th>EDITAR</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autos']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>
        <tr class="fs-5">
            <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->nombres;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->anio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->motor;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->marca;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->nombre;?>
</td>
            <td><a class="btn btn-primary" href="detalle/<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
/ <?php echo $_smarty_tpl->tpl_vars['auto']->value->id_categoria_ext;?>
">Ver mas</a></td>
            <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                <td><a class="btn btn-badge text-bg-danger" href="deleteItem/<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
">BORRAR</a></td>
                <td><a class="btn btn-badge text-bg-warning" href="formEditItem/<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
">EDITAR</a></td>
            <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if ((isset($_SESSION['IS_LOGGED']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:app/templates/form_autos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

</section>


<?php }
}
