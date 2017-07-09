<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Listar</title>
    </head>
    <body>
        
        <header>
            <h1>Hospital Comunal de Tetengo</h1>
        </header>
        <img id="hospital" src="../img/hospital.png">
        <br>
        <a onclick="window.top.location.href='../index.html'"> <img  id="inicio" src="../img/home.png" ></a>
        
        <div id="btnindex">
                <button id="btnindex1" type="button" onclick="window.top.location.href='ListadoPacientes.php'" >Listado Pacientes</button>
                <button id="btnindex1" type="button" onclick="window.top.location.href='ListadoMedicos.php'">Listado Medicos</button>
        </div>
        <footer>
            <p>Hospital Comunal<p>
        </footer>

    </body>
</html>
