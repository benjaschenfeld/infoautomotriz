{include file="app/templates/layout/header.tpl"}

<section>
    <h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Editar</h1>
    <div class="container">
        <div class="p-4 bg-light mt-3">
            <form class="g-3 mt-2" method="POST" action="editCategoria/{$id}">
                <div class="mb-4">
                    <input type="text" class="form-control" value={$categoria->nombre} name="nombre" placeholder="Nombre:">
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" name="caracteristicas" value="{$categoria->caracteristicas}" placeholder="caracteristicas:">
                </div>

                <button class="btn btn-badge text-bg-success">ENVIAR</button>
                <button class="btn btn-primary">VOLVER</button>
            </form>
        </div>
    </div>
</section>