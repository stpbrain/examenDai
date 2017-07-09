<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Registro Pacientes</title>
    </head>
    <body>
        
        <header>
            <h1>Hospital Comunal de Tetengo</h1>
        </header>
        <img id="hospital" src="../img/hospital.png">
        <br>

        
        <a onclick="window.top.location.href='../index.html'"> <img  id="inicio" src="../img/home.png" ></a>
        
        <form>
            <fieldset>
                <h2>Registro de pacientes</h2>
                <br>
                <div id="campo">
                    <label>RUT:</label>
                    <input id="input" type="text" name="rut" placeholder="Ingrese Rut"required/>
                </div>
                <br>
                <div id="campo">
                    <label>Nombre Completo:</label>
                    <input id="input" type="text" name="nombre" placeholder="Ingrese Nombre Completo" required/>
                </div>
                <br>
                <div>
                    <label>Fecha de Nacimiento:</label>
                    <input id="input" type="date" id="fecha" name="fecha" required>
                </div>
                <br>
                <div id="campo">
                    <label>Masculino //
                        <input id="radio1" type="radio" name="sexo" value="Masculino" >
                    </label>
                    <label>Femenino
                        <input id="radio2" type="radio" name="sexo" value="Femenino" >
                    </label>
                </div>
                <br>
                <div id="campo">
                    <label>Direccion:</label>
                    <input id="input" type="text" name="direccion" placeholder="Ingrese Direccion" required/>
                </div>
                <br>
                <div id="campo">
                    <label>Numero de Telefono:</label>
                    <input id="input" type="text" name="fono" placeholder="Ingrese Numero" required/>
                </div>
                <br>
                <img  id="foto" src="../img/img1.jpg">              
                <div >
                    <input id="botonera" type="submit" name="enviar" value="Ingresar">
                </div>
            </fieldset>
        </form>
        
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>
