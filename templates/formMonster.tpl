{include file="header.tpl"}

<form action="{$action}/{$Monster->id}" method="post"  enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input class="form-control" id="exampleFormControlInput1" value="{$Monster->nombre}" name="nombre">
    </div>
    <div class="mb-3">
        <label class="form-label">Debilidad</label>
        <input class="form-control" id="exampleFormControlInput1" value="{$Monster->debilidad}" name="debilidad">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3">{$Monster->descripcion}</textarea>
    </div>
    <select name="categoria" class="form-select" aria-label="Default select example">
            {foreach from=$categories item=$categoria}
                {if $categoria->nombre==$Monster->nombre2}
                    <option selected value={$categoria->id}>{$categoria->nombre}</option>
                {else}
                    <option value={$categoria->id}>{$categoria->nombre}</option>
                {/if}
            {/foreach}
    </select>
    <div class="form-group">
        <input type="file" name="imagen" id="imageToUpload">
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>

{include file="footer.tpl"}