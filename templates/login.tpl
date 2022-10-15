{include file="header.tpl"}

<form method="POST" action="verifyLogin">
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">No compartiremos tu email con nadie.</small>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" name="contrasenia" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Verificar</button>
<label>{$mensaje}</label>
</form>

{include file="footer.tpl"}