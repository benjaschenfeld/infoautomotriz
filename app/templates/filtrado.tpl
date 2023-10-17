{include file='app/templates/layout/header.tpl'}

<section>
{foreach from=$autos item=$auto}
    <p class="fs-5 pt-4 m-4">{$auto->nombres}</p>
{/foreach}
<a class="btn btn-primary m-4" href='home'>Volver</a>
</section>

{include file="app/templates/layout/footer.tpl"}