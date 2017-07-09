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
                <h2>Inicio de Sesión</h2>
                <br>
                <div id="campo">
                    <label>Tipo de Perfil:</label>
                    <select><option><       Tipo de Perfil      ></option></select>
                </div>
                <br>
                <div id="campo">
                    <label>RUT del Registrado:</label>
                    <input id="input" type="text" name="rut" placeholder="Ingrese Rut"required/>
                </div>
                <br>
                <div id="campo">
                    <label>Contraseña:</label>
                    <input id="input" type="password" name="pass" placeholder="Ingrese Contraseña" required/>
                </div>
                <br>
                
                <img  id="foto" src="../img/img4.png" >

                               
                <div>
                    <input id="botonera"  type="submit" name="enviar" value="Ingresar">
                </div>
            </fieldset>
        </form>
        </div>
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>

