{include file="header.tpl"}


<table class='table'>
    <thead>
        <tr>
            <th scope="col">Nombre</td>
            <th scope="col">Descripcion</td>
            <th scope="col"></td>
        </tr>
    </thead>
    {foreach from=$list item=$categoria}
        <tbody>
            <tr>
                <th scope="row">{$categoria->nombre}</td>
                <td>{$categoria->descripcion}</td>
                <td>
                    <form action="deleteCategorie/{$categoria->id}" method="POST">
                    <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    {/foreach}
</table>

{include file="footer.tpl"}