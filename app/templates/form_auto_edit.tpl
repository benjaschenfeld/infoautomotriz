{include file="app/templates/layout/header.tpl"}

<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Editar</h1>
<div class="container">
    <div class="p-4 bg-light mt-3">
        <form class="g-3 mt-2" method="POST" action="editItem/{$auto->id_auto}">
            <div class="mb-4">
                <input type="text" class="form-control" name="nombre" value="{$auto->nombres}" placeholder="Nombre:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" value="{$auto->anio}" name="anio" placeholder="Anio:"></input>
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="motor" value="{$auto->motor}" placeholder="Motor:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="marca" value="{$auto->marca}" placeholder="Marca:">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="caracteristicas" value="{$auto->caracteristicas}" placeholder="Caracteristicas:">
            </div>
            <div class="mb-4">
                <label for="categoria" class="form-label fs-5">CATEGORIA</label>
                <select class="form-select" name="categoria">
                    {foreach from=$categorias item=$categoria}
                        <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                    {/foreach}
                </select>
            </div>

            <button class="btn btn-badge text-bg-success">ENVIAR</button>
            <button class="btn btn-primary"><a href="home">VOLVER</a></button>
        </form>
    </div>
</div>