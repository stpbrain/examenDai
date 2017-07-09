<?php

include '../conexion/conexionBD.php';

$cadena = $_POST['direccion_p'];

    $key='C1';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));


 IF($_SERVER['REQUEST_METHOD'] == 'POST')
{
     
     
    
$consulta="INSERT INTO pacientes VALUES ('".$_POST['rut_p']."','".$_POST['nombre_p']."','".$_POST['fecha_p']."','".$_POST['genero_p']."','".$encrypted."','".$_POST['fono_p1']."','".$_POST['fono_p2']."');";
                                          
$alert = "";

if(DBConnection::consulta($consulta))
{
    $alert = '<div class="alert alert-success" role="alert">El registro se ha insertado correctamente</div>';
    $alert = $alert. '<a href="../index.html" class="btn btn-success">Volver</a>';
    
}
else
{
	$alert = '<div class="alert alert-danger" role="alert">El registro no se ha insertado correctamente</div>';
	$alert = $alert. '<a href="../index.html" class="btn btn-warning">Volver</a>';
        
}
print_r($consulta);


}
?>
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
<body >

<?php echo $alert; ?>

</body>
</html>

 


