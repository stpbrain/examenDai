<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <script src="../js/rut.js"></script>
           
        <title>Hospital Comunal</title>
    </head>
    <body>
        <header>
            <h1>Hospital Comunal</h1>
        </header>
        
        <form  action="../control/insertaPaciente.php" method="POST">
            <fieldset>
                <legend> Ingreso de Pacientes </legend>
                <br>
                <div>
                    <label>RUT:</label>
                    <input id="input" type="text" name="rut_p" placeholder="Ingrese Rut"required onblur="esrut(this.value)" maxlength="9"  />
                </div>
                <br>
                <div>
                    <label>Nombre Completo:</label>
                    <input id="input" type="text" name="nombre_p" placeholder="Ingrese Nombre Completo" required/>
                </div>
                <br>
                <div>
                    <label>Fecha de Nacimiento:</label>
                    <input id="input" type="date" id="fecha" name="fecha_p" required>
                </div>
                <br>
                <div>
                    <label>Masculino
                        <input type="radio" name="genero_p" value="Masculino" required>
                    </label>
                    <label>Femenino
                        <input type="radio" name="genero_p" value="Femenino" required>
                    </label>
                </div>
                <br>
                <div>
                    <label>Direccion:</label>
                    <input id="input" type="text" name="direccion_p" placeholder="Ingrese Direccion" required/>
                </div>
                <br>
                <div>
                    <label>Numero de Telefono:</label>
                    <input id="input" type="text" name="fono_p1" placeholder="Ingrese Numero" required/>
                </div>
                <br>
                <div>
                    <label>Numero de Telefono Adicional:</label>
                    <input id="input" type="text" name="fono_p2" placeholder="Ingrese Numero Adicional" />
                </div>
                <br>

                
                <img  id="foto" src="../img/inicio.jpg" >
                
                <div id="botonera" >
                    <input type="submit" name="enviar" value="Ingresar">
                    <input type="button" name="volver" value="Volver" onclick="window.top.location.href='../index.html'"> 
                </div>
            </fieldset>
        </form>
        
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>
