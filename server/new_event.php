<?php
  require('AccesoBD.php');

try {


      $con = new ConexionBD('localhost','user_prueba','esteban123');
      $response['conexion'] = $con->initConexion('evaluacion_final');

      if($response['conexion']=="OK"){

      $resultado = $con->consultar(['eventos'],['max(id) as maxid'],'');

      $fila = $resultado->fetch_assoc();

      if( $fila["maxid"] != NULL){
          $data['id'] = $fila["maxid"] + 1;
      }else {
          $data['id'] = "1";
      }

      $response['id'] = $data['id'];

       $data['titulo'] = "'".$_POST['titulo']."'";
       $data['fecha_inicio'] = "'".$_POST['start_date']."'";
       $data['fecha_final'] = "'".$_POST['end_date']."'";
       $data['hora_inicio'] = "'".$_POST['start_hour']."'";
       $data['hora_final'] = "'".$_POST['end_hour']."'";

       $response['prueba'] = $_POST['allDay'];

       if($con->insertData('eventos', $data)){
         $response['msg']="OK";
       }else {
         $response['msg']="ERROR";
       }
     }else{
       $response['msg']="Error en la conexión";
     }
     } catch (Exception $e) {
       $response['msg'] = $e->getMessage();
     }
      echo json_encode($response);

$con->cerrarConexion();
  //  }

 ?>
