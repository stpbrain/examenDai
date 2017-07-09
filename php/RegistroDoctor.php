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
            <h1>Hospital Comunal de Tetengo</h1>        
        </header>
        <img id="hospital" src="../img/hospital.png">
        <br>

        
        <a onclick="window.top.location.href='../index.html'"> <img  id="inicio" src="../img/home.png" ></a>
        
        <div id="campomayor">
        <form>
            <fieldset>
                <h2>Registro de Doctores</h2>
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
                <div id="campo">
                    <label>Fecha de Contratacion:</label>
                    <input id="input" type="date" id="fecha" name="fecha" required>
                </div>
                <br>
                <div id="campo">
                    <label>Especialidad:</label>
                    <input id="input" type="text" name="Especialidad" placeholder="Ingrese Especialidad" required/>
                </div>
                <br>
                <div id="campo">
                    <label>Valor de Consulta:</label>
                    <input id="input" type="text" name="fono" placeholder="Valor Consulta" required/>
                </div>
                <br>
                
                <img  id="foto" src="../img/img2.jpg" >
                               
                <div >
                    <input id="botonera" type="submit" name="enviar" value="Ingresar">
                </div>
            </fieldset>
        </form>
        </div>
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>
