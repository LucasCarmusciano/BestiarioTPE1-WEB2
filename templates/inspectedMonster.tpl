{include file="header.tpl"}

<div class="shadow p-3 mb-5 bg-body rounded card text-center">
  <div class="card-title card-header">
    {$Monster->nombre}
  </div>
  <div class="d-flex align-items-center flex-row card-body">
    <div class="p-2 w-50 rounded float-start">
        <img src="..." alt="...">
    </div>
    <div class="flex-column flex-grow-1 ms-3">
        <p class="p-2 overflow-auto card-text">{$Monster->descripcion}</p>
        <p class="mt-auto p-2 card-text">Debilidad: {$Monster->debilidad}</p>
    </div>
  </div>
  <div class="fst-italic card-footer text-muted">
    Categoria: {$Monster->nombre2}
  </div>
</div>
{include file="footer.tpl"}