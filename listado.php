<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container-fluid centrar">
   <div class="panel panel-success">
    <div class="panel-heading">
        <h3>Soportes Vigentes</h3>
    </div>
    <div class="panel-body"></div>
<table class="table table-striped">
<?php
//Ejemplo aprenderaprogramar.com

echo "<tr>";
echo "<th>#</th>";
echo "<th>Servicio</th>";
echo "<th>Solicitante</th>";
echo "<th>Fecha de Solicitud</th>";
echo "<th>Descripcion</th>";
//echo "<th>  </th>";
echo '</tr>';
function mostrarDatos ($resultados) {
    
if ($resultados !=NULL) {
echo "<tr>";
echo "<td>".$resultados['num']."</td>";
echo "<td>".$resultados['servicio']."</td>";
echo "<td>".$resultados['solicitante']."</td>";
echo "<td>".$resultados['fechaSolicitud']."</td>";
echo "<td>".$resultados['descripcion']."</td>";
echo "</tr>";
}
else {echo "</br>No hay más datos!!! </br>";}
}
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "soportes");
$result = mysqli_query($link, "SELECT * FROM soporte");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);
?>
</table>
</div>
</div>
</body>
</html>  
                             