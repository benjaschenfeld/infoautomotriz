<section>

<h1 class="text-center shadow-sm p-3 mb-6 bg-body rounded">Lista de Categorias</h1>
{if !isset($smarty.session.IS_LOGGED)}
    <p class="p-5 fs-5">Aqui mostraremos informacion sobre algunos ejemplos de autos que pertenecen a algunas de estas categorias. En cada auto vamos a mostrar: Su nombre correspondiente (u apodos), breve descripcion del modelo, el nombre del modelo y la marca del fabricante y proveedor</p>
{/if}
<table class="table text-center table-striped">
    <thead class="bg-dark text-white">
        <tr>
            <th>Nombre</th>
            <th>Filtrar</th>
            <th>Caracteristicas</th>
            {if isset($smarty.session.IS_LOGGED)}
                <th>BORRAR</th>
                <th>EDITAR</th>
            {/if}
        </tr>
    </thead>
    <tbody>
    {foreach from=$categorias item=$categoria}
        <tr class="fs-5">
            <td>{$categoria->nombre}</td>
            <td><a class="btn btn-primary" href="filtrar/{$categoria->id_categoria}">Filtrar</a></td>
            <td>{$categoria->caracteristicas}</td>
            {if isset($smarty.session.IS_LOGGED)}
                <td><a class="btn btn-badge text-bg-danger" href="deleteCategoria/{$categoria->id_categoria}">BORRAR</a></td>
                <td><a class="btn btn-badge text-bg-warning" href="formEditCat/{$categoria->id_categoria}">EDITAR</a></td>
            {/if}
        </tr>
    {/foreach}
    </tbody>
</table>
</section>

{if isset($smarty.session.IS_LOGGED)}
{include file="app/templates/form_categorias.tpl"}
{/if}
{include file="app/templates/layout/footer.tpl"}
