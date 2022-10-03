{include file="header.tpl"}


<table class='table'>
    <thead>
        <tr>
            <th scope="col">Nombre</td>
            <th scope="col">Debilidad</td>
            <th scope="col">Descripcion</td>
            <th scope="col">Categoria</td>
        </tr>
    </thead>
    {foreach from=$list item=$monster}
        <tbody>
            <tr>
                <th scope="row">{$monster->nombre}</td>
                <td>{$monster->debilidad}</td>
                <td>{$monster->descripcion}</td>
                <td>{$monster->nombre2}</td>
            </tr>
        </tbody>
    {/foreach}
</table>

{include file="footer.tpl"}