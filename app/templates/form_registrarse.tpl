{include file='app/templates/layout/header.tpl'}

<h1 class="text-center shadow-sm p-3 mb-0 bg-body rounded">Registrarse</h1>
<div class="container">
    <div class="p-4 bg-dark mt-3">
        <form class="g-3 mt-2" method="POST" action="addCuenta">
            <div class="mb-4">
                <label for="email" class="form-label text-white fs-4">EMAIL</label>
                <input type="text" class="form-control" name="email" placeholder="Tu Email:" id="email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label text-white fs-4">PASSWORD</label>
                <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña:"
                    id="password">
            </div>
            <button class="btn btn-primary">REGISTRARSE</button>
        </form>
    </div>
</div>

{include file='app/templates/layout/footer.tpl'}
