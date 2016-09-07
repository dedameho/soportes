<?php
$connect=mysqli_connect("localhost","root","","soportes");
if ($connect) {
        $numero=$_POST ['numero'];
		$servicio=$_POST ['servicio'];
		$solicitante=$_POST ['solicitante'];
		$fechaSolicitud=$_POST ['fechaSolicitud'];
		$descripcion=$_POST ['descripcion'];

   // print_r($_POST);
    
		$consulta="insert into soporte values ('','$servicio','$solicitante','$fechaSolicitud','$descripcion')";
		
		$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado) {
			header('Location:listado.php');
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}

    }