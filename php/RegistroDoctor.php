<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/rut.js"></script>
        
        <title>Registro de Medicos</title>
    </head>
    <body>
        
        
        <header>
            <h1>Hospital Comunal de Tetengo</h1>        
        </header>
<<<<<<< HEAD
        <form action="../control/insertaMedico.php" method="POST">
=======
        <img id="hospital" src="../img/hospital.png">
        <br>

        
        <a onclick="window.top.location.href='../index.html'"> <img  id="inicio" src="../img/home.png" ></a>
        
        <div id="campomayor">
        <form>
>>>>>>> origin/master
            <fieldset>
                <h2>Registro de Doctores</h2>
                <br>
                <div id="campo">
                    <label>RUT:</label>
                    <input id="input" type="text" name="rut_medico" placeholder="Ingrese Rut" required onblur="esrut(this.value)"/>
                </div>
                <br>
                <div id="campo">
                    <label>Nombre Completo:</label>
                    <input id="input " type="text" name="nombre_medico" placeholder="Ingrese Nombre Completo" required/>
                </div>
                <br>
                <div id="campo">
                    <label>Fecha de Contratacion:</label>
                    <input id="input" type="date" id="fecha" name="fecha_contra_medico" required>
                </div>
                <br>
                <div id="campo">
                    <label>Especialidad:</label>
                    <input id="input" type="text" name="Especialidad_medico" placeholder="Ingrese Especialidad" required/>
                </div>
                <br>
                <div id="campo">
                    <label>Valor de Consulta:</label>
                    <input id="input" type="text" name="valor_consulta" placeholder="Valor Consulta" required/>
                </div>
                <br>
<<<<<<< HEAD
                <div id="botonera" >
                    <input type="submit" name="enviar" value="Ingresar">
                    <input type="button" name="volver" value="Volver" onclick="window.top.location.href='../index.html'">
=======
                
                <img  id="foto" src="../img/img2.jpg" >
                               
                <div >
                    <input id="botonera" type="submit" name="enviar" value="Ingresar">
>>>>>>> origin/master
                </div>
            </fieldset>
        </form>
        </div>
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>
