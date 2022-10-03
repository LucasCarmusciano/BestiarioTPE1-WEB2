{include file="header.tpl"}

<form action="insertCategories" method="post">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input class="form-control" id="exampleFormControlInput1" name="nombre">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3"></textarea>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>

{include file="footer.tpl"}