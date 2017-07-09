<?php

include '../conexion/conexionBD.php';



 IF($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
$consulta="INSERT INTO medicos VALUES ('".$_POST['rut_medico']."','".$_POST['nombre_medico']."','".$_POST['fecha_contra_medico']."','".$_POST['Especialidad_medico']."','".$_POST['valor_consulta']."');";

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

 


