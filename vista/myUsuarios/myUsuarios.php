<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $data["Titulo"]; ?>
        </title>
    </head>
    <body>
        <h2><?php echo $data["Titulo"]; ?></h2>
        <br/>
        <br/>
        <a href="?path=myUsuariosControlador&accion=FormCrearUsuarios">Agregar</a>
        <br/>
        <br/>
        <table border="1" width="70%" >
            <thead>
                <tr>
                    <th>ID USUARIO</th>
                    <th>CLAVE</th>
                    <th>PAGINA</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["usuarios"] as $fila){
                    echo "<tr>";
                         echo "<td>".$fila["email"]."</td>";
                         echo "<td>".$fila["clave"]."</td>";
                         echo "<td>".$fila["paginaInicio"]."</td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
            
        </table>
        
    </body>
</html>
