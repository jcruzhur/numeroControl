<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Form. Cuenta Bancaria</title>
</head>
<body>

    <h1>Introduzca el numero de cuenta</h1>
    
    <form action="comprobacion.html.php" method="post">
        
    <div>
        <label for="entidad">Entidad:
            <input type="text" name="entidad" requied></label>
    </div>
    <div>
        <label for="oficina">Oficina:
            <input type="text" name="oficina" requied></label>
    </div>
    <div>
        <label for="numerocontrol">N control:
            <input type="text" name="numerocontrol" requied></label>
    </div>
    <div>
        <label for="cuenta">Cuenta:
            <input type="text" name="cuenta" requied></label>
    </div>
    
    <div>
            <input type="submit" value="enviar">
        </div>
    
    </form>
    
</body>
</html>