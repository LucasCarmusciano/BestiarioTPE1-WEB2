{include file="header.tpl"}


<table class='table'>
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col"></th>
        </tr>
    </thead>
    {foreach from=$list item=$monster}
        <tbody>
            <tr>
                <th class="align-middle" scope="row">{$monster->nombre}</th>
                <td class="align-middle">{$monster->descripcion}</td>
                <td class="align-middle">{$monster->nombre2}</td>
                <td class="align-middle">
                    <form action="inspect/{$monster->id}" method="POST">
                        <button type="submit" class="fst-italic btn btn-outline-secondary border border-0">Inspeccionar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    {/foreach}
</table>

{include file="footer.tpl"}