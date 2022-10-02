{include file="header.tpl"}

<form action="insertMonster" method="post">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input class="form-control" id="exampleFormControlInput1" name="nombre">
    </div>
    <div class="mb-3">
        <label class="form-label">Debilidad</label>
        <input class="form-control" id="exampleFormControlInput1" name="debilidad">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3"></textarea>
    </div>
    <select name="categoria" class="form-select" aria-label="Default select example">
        <option selected>-Categoria-</option>
        <option value="1">Bestia</option>
        <option value="2">Maldito</option>
        <option value="3">Draconito</option>
    </select>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Enviar</button>
        <a class="btn btn-primary" type="button" href="list">Ver lista</a>
    </div>
</form>

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
        <a class="btn btn-primary" type="button" href="categories">Ver categorias</a>
    </div>
</form>

{include file="footer.tpl"}