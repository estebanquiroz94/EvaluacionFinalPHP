<?php

require('AccesoBD.php');

$con = new ConexionBD('localhost','user_prueba','esteban123');
$response['conexion'] = $con->initConexion('evaluacion_final');

if ($response['conexion']=='OK') {
  $resultado_consulta = $con->consultar(['usuarios'],['email', 'password'], 'WHERE email="'.$_POST['username'].'"');

  while($fila = $resultado_consulta->fetch_assoc()){

      if(password_verify($_POST['passw'],$fila["password"]))
      {
          $response['acceso'] = 'concedido';
      }else {
        $response['acceso'] = 'rechazado';
      }
  }
        //$response['acceso'] = 'concedido';
}

echo json_encode($response);

$con->cerrarConexion();


 ?>
