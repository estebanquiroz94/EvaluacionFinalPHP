<?php

  require('AccesoBD.php');

  $con = new ConexionBD('localhost','user_prueba','esteban123');
  $response['conexion'] = $con->initConexion('evaluacion_final');

  if($response['conexion'] == "OK"){

    if($con->eliminarRegistro("eventos", 'id = "'.$_POST['idevento'].'"'))
    {
      $response['msg'] = "Evento eliminado con éxito";
    }
    else
    {
      $response['msg'] = "No se pudo eliminar el evento";
    }
  }
  else {
      $response['conexion'] = "Error en la conexión";
  }
  echo json_encode($response);

 ?>
