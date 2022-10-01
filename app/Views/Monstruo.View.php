<?php 
    class MonstruoView {
        function __construct(){
        }


        public function showList($list){
        echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>List</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Edad</td>
                    </tr>';
                    foreach ($list as $monster){
                        echo "<tr>";
                            echo "<td>$monster->id</td>";
                            echo "<td>$monster->nombre</td>";
                            echo "<td>$monster->debilidad</td>";
                            echo "<td>$monster->descripcion</td>";
                            echo "<td>$monster->id_Categoria_fk</td>";
                            echo '<td>
                                <form action="delete/'.$monster->id.'" method="POST">
                                <button type="submit">Borrar</button>
                                </form>
                                </td>';
                        echo "</tr>";
                    }
                echo '</table>
                <a href="home">Volver</a>
                <a href="form">Agregar monstruo</a>

            </body>
            </html>';
        }

        public function showPrivateForm(){
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Home</title>
            </head>
            <body>
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
                </form>';
        }
    }
?>