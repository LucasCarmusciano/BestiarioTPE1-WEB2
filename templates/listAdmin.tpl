{include file="header.tpl"}

<div class="card">
  <div class="card-header">
    Categorias
  </div>
  <div class="card-body">
    <ul class="list-group">
    {foreach from=$listCategoria item=$categoria}
      <li class="list-group-item d-flex justify-content-between align-items-center">
        {$categoria->nombre}
        <form action="deleteCategorie/{$categoria->id}" method="POST">
            <span class="badge bg-primary rounded-pill">{$arrCounts[$categoria->id]}</span>
            <button type="submit">Borrar</button>
        </form>
      </li>
    {/foreach}
    </ul>
  </div>
</div>
<div class="card">
  <div class="card-header">
    Monstruo
  </div>
  <div class="card-body">
    <ul class="list-group">
    {foreach from=$listMonster item=$monstruo}
      <li class="list-group-item d-flex justify-content-between align-items-center">
        {$monstruo->nombre}
        <form action="deleteMonster/{$monstruo->id}" method="POST">
            <button type="submit">Borrar</button>
        </form>
      </li>
    {/foreach}
    </ul>
  </div>
</div>

{include file="footer.tpl"}