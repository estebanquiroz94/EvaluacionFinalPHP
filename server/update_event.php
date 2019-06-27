<?php

  require('AccesoBD.php');

  $con = new ConexionBD('localhost','user_prueba','esteban123');
  $response['conexion'] = $con->initConexion('evaluacion_final');


  if($response['conexion'] == "OK")
  {

    $data['fecha_inicio'] = "'".$_POST['start_date']."'";
    $data['fecha_final'] = "'".$_POST['end_date']."'";

    $condicion = "id = '".$_POST['id']."'";

    if($con->actualizarRegistro('eventos', $data, $condicion)){
      $response['msg']="Evento actualizado correctamente";
    }else {
      $response['msg']="ERROR";
    }

  }else {
    $response['msg'] = "Error en la conexión";
  }

  echo json_encode($response);

 ?>
