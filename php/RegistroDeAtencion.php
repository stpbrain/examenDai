<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Registro de Atencion</title>
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
                <h2>Registro de Atencion</h2>
                <br>
                <div id="campo">
                    <label>Numero Unico Secuencial:</label>
                    <input id="input" type="text" name="secuencial" placeholder="Numero Secuencial" required/>
                </div>
                <br>
                <div id="campo">
                    <label>Fecha y Hora de Atencion:</label>
                    <input id="input" type="datetime-local" id="fecha" name="fechaatencion" required>
                </div>
                <br>
                <div id="campo">
                    <label>Paciente Atendido:</label>
                    <select>
                        <option value="paciente"><      Paciente        ></option>
                    </select>                </div>
                <br>
                <div id="campo">
                    <label>Medico Tratante:</label>
                    <select>
                        <option value="medicotratante"><        Medico Tratante     ></option>
                    </select>
                </div>
                <br>
                <div id="campo">
                    <label>Estado:</label>
                    <select>
                        <option value="estado"><        Estado      ></option>
                    </select>
                </div>
                <br>
                
                <img  id="foto" src="../img/img3.jpg" >
                               
                <div >
                    <input  id="botonera" type="submit" name="enviar" value="Ingresar">
                </div>
            </fieldset>
        </form>
        </div>
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>
