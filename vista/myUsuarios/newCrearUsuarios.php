<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $data["Titulo"]; ?>
        </title>
    </head>
    <body>
        <h2>Crear <?php echo $data["Titulo"]; ?></h2>
        <br/>
        <br/>
        <br/>
        <form method="POST" action="?path=myUsuariosControlador&Grabar">
            
            <label>Email Usuario :</label><!-- comment -->
            <input type="text" name="nombreusu" required><!-- comment -->
            
            <label>Clave Usuario :</label><!-- comment -->
            <input type="text" name="claveusu" required><!-- comment -->
            
            <label>Pagina Usuario :</label><!-- comment -->
            <input type="text" name="paginausu" required><!-- comment -->
            
            <br/><!-- comment -->
            <input type="submit" value"Grabar Usuario"><!-- comment -->
            
            
            
        </form>
        
    </body>
</html>