<?php

  require('AccesoBD.php');

  $con = new ConexionBD('localhost','user_prueba','esteban123');
  $response['msg'] = $con->initConexion('evaluacion_final');

  if ($response['msg']=='OK') {
      $resultado = $con->consultar(['eventos'],['*']);

      $response['eventos'] = array();

      while($fila = $resultado->fetch_assoc()){

        $evento = array(
                  'id' => $fila['id'],
                  'title' => $fila['titulo'],
                  'start' => $fila['fecha_inicio'].' '.$fila['hora_inicio'],
                  'end' => $fila['fecha_final'].' '.$fila['hora_final'],
                  'allDay' => false
                );

        array_push($response['eventos'], $evento);

		}
  }

  echo json_encode($response);


 ?>
