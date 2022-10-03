{include file="header.tpl"}

<div class="accordion" id="accordionExample">
    {foreach from=$listCategoria item=$categoria}
    <div class="accordion-item" id="{$categoria->id}">
        <h2 class="accordion-header" id="headingOne">
        <button  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" onclick="desplegar({$categoria->id}, `{$categoria->nombre}`, `{$categoria->descripcion}`)">
            {$categoria->nombre}
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <h6>{$categoria->descripcion}</h6>
            <a class="nav-link" aria-current="page" href="categories/{$categoria->nombre}">Ver</a>
        </div>
        </div>
    </div>
    {/foreach}
</div>



{include file="footer.tpl"}