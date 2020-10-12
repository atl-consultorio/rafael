Aquí podras agendar tu cita





<?php

include_once 'dao/conexion.php';
	//capturar los valores del formulario//
	$fecha =$_GET['fecha'];
$descripcion =$_GET['descripcion'];

//sentencia sql para insertar
 $sql_insertar_cita = 'INSERT INTO tbl_cita (fecha,descripcion)
VALUES (?,?)';
 //preparar la consulta por PDO
 $consulta_insertar_cita = $pdo->prepare($sql_insertar_cita);
 //ejecutar la consulta
 $consulta_insertar_cita->execute(array($fecha,$descripcion));
 //redireccionar o refrescar la pagina
 
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>citas</title>
 </head>
 <body>
     
 <form action="cita.php" method="GET">
		<label>fecha</label>
		<input type="text" name="fecha" placeholder="escribe tu horario">
		<br>
		<label>descripcion</label>
		<input type="text" name="descripcion" placeholder="describe lo que buscas de la cita">
		<br>
		
		<button type="submit">agendar</button>
	<br>
	<br>

 </body>
 </html>