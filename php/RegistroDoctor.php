<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Registro de Medicos</title>
    </head>
    <body>
        
        <header>
            <h1>Hospital Comunal</h1>
        </header>
        <form>
            <fieldset>
                <legend>Ingreso de Medicos</legend>
                <br>
                <div>
                    <label>RUT:</label>
                    <input id="input" type="text" name="rut" placeholder="Ingrese Rut"required/>
                </div>
                <br>
                <div>
                    <label>Nombre Completo:</label>
                    <input id="input" type="text" name="nombre" placeholder="Ingrese Nombre Completo" required/>
                </div>
                <br>
                <div>
                    <label>Fecha de Contratacion:</label>
                    <input id="input" type="date" id="fecha" name="fecha" required>
                </div>
                <br>
                <div>
                    <label>Especialidad:</label>
                    <input id="input" type="text" name="Especialidad" placeholder="Ingrese Especialidad" required/>
                </div>
                <br>
                <div>
                    <label>Valor de Consulta:</label>
                    <input id="input" type="text" name="fono" placeholder="Valor Consulta" required/>
                </div>
                <br>
                <div id="botonera" >
                    <input type="submit" name="enviar" value="Ingresar">
                    <input type="button" name="volver" value="Volver" onclick="window.top.location.href='RegistroPaciente.php'">
                </div>
            </fieldset>
        </form>
        
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>
