{include file="header.tpl"}

<form action="insert" method="post">
    <input name="nombre"type="text" placeholder="ingrese nombre">
    <input name="debilidad"type="text" placeholder="ingrese debilidad">
    <input name="descripcion"type="text" placeholder="descripcion..">
    <select name="categoria">
        <option value="1">Bestia</option>
        <option value="2">Maldito</option>
        <option value="3">Draconito</option>
    </select>
    <button type="submit">Enviar</button>
    <a href="list">Ver lista</a>
</form>'

{include file="footer.tpl"}