<?php

  require('AccesoBD.php');

  $con = new ConexionBD('localhost','user_prueba','esteban123');
  $response['conexion'] = $con->initConexion('evaluacion_final');

  if($response['conexion'] == "OK"){
    $conexion = $con->getConexion();

    $insert = $conexion->prepare('INSERT INTO usuarios (email, nombre_completo, password, fecha_nacimiento) VALUES (?,?,?,?)');
    $insert->bind_param("ssss",$email, $nombre_completo, $password, $fecha_nacimiento);

    $email = "sofia.quiroz@gmail.com";
    $nombre_completo = "Sofia Quiroz Henao";
    $password = password_hash("12345",PASSWORD_DEFAULT);
    $fecha_nacimiento = '2000/07/15';

    $insert->execute();

    $email = "joel.quiroz@gmail.com";
    $nombre_completo = "Joel de Jesus";
    $password = password_hash("jomajuva", PASSWORD_DEFAULT);
    $fecha_nacimiento = '2000/07/15';

    $insert->execute();

    $email = "valentina.quiroz@gmail.com";
    $nombre_completo = "Valentina Quiroz";
    $password = password_hash("valen321", PASSWORD_DEFAULT);
    $fecha_nacimiento = '2000/07/15';

    $insert->execute();

    echo "Se registraron correctamente";

    $con->cerrarConexion();
  }


 ?>
