{include file="header.tpl"}

<ul class="list-group">
{foreach from=$listCategoria item=$categoria key=$key}
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {$categoria->nombre}
    <form action="deleteCategorie/{$categoria->id}" method="POST">
        <span class="badge bg-primary rounded-pill">{$arrCounts[$categoria->id]}</span>
        <button type="submit">Borrar</button>
    </form>
  </li>
{/foreach}
</ul>


{include file="footer.tpl"}