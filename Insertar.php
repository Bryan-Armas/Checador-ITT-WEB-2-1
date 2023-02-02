<html>
    
    <head>
        <title> Formulario </title>
    </head> 
    <body>

        <form action="cod_registro.php" method="post">
        <h2>Mi primer formulario del mini curso de php con Visual Studio Code </h2>
        <input type="number" id="IdEmpleados" name="IdEmpleados" require placeholder="NoControl"/>
        <input type="text" id="Nom" name="Nom" require placeholder="Nombres"/>
        <input type="text" id="Ape" name="Ape" require placeholder="Apellidos"/>
        <input type="tel" id="Tel" name="Tel" pattern="[0-9]{3}-[0-9]{8}" require placeholder="Telefono"/>
        <button type="submit">Registrar usuario</button>
        </form>

    </body>
</html>