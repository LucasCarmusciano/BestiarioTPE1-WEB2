{include file="header.tpl"}


<table class='table'>
    <thead>
        <tr>
            <th scope="col">ID</td>
            <th scope="col">Nombre</td>
            <th scope="col">Debilidad</td>
            <th scope="col">Descripcion</td>
            <th scope="col">Categoria</td>
        </tr>
    </thead>
    {foreach from=$list item=$monster}
        <tbody>
            <tr>
                <th scope="row">{$monster->id}</td>
                <td>{$monster->nombre}</td>
                <td>{$monster->debilidad}</td>
                <td>{$monster->descripcion}</td>
                <td>{$monster->id_Categoria_fk}</td>
                <td>
                    <form action="delete/'.{$monster->id}.'" method="POST">
                    <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    {/foreach}
</table>
<a href="home">Volver</a>
<a href="form">Agregar monstruo</a>

{include file="footer.tpl"}