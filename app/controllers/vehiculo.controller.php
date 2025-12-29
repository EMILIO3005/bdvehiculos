<?php

require_once '../models/Vehiculos.php';
$vehiculo = new Vehiculos();

if (isset($_POST['operacion'])){

  switch ($_POST['operacion']){
    case 'listar':
      echo json_encode($vehiculo->listar());
      break;
    case 'registrar':

      $registro = [
        "placa"           => $_POST['placa'],
        "marca"           => $_POST['marca'],
        "gama"             => $_POST['gama'],
        "modelo"           => $_POST['modelo'],
        "fechaFabricacion" => $_POST['fechaFabricacion'],
        "color"            => $_POST['color'],
        "tipo_combustible" => $_POST['tipo_combustible'],
        "precio"           => $_POST['precio']
      ];
      $idobtenido = $vehiculo->registrar($registro);
      echo json_encode(["id" => $idobtenido]);
      break;
    case 'eliminar':
      $filasAfectadas = $vehiculo->eliminar($_POST['id']) ;
      echo json_encode(['filas' => $filasAfectadas]);
      break;
    case 'buscarId':
      echo json_encode($vehiculo->buscarId($_POST['id']));
      break;
    
    case 'actualizar':
      $registro = [
        "placa"             => $_POST['placa'],
        "marca"             => $_POST['marca'],
        "gama"             => $_POST['gama'],
        "modelo"           => $_POST['modelo'],
        "fechaFabricacion" => $_POST['fechaFabricacion'],
        "color"            => $_POST['color'],
        "tipo_combustible" => $_POST['tipo_combustible'],
        "precio"           => $_POST['precio'],
        "id"               => $_POST['id']
      ];
      $filasAfectadas = $vehiculo->actualizar($registro);
      echo json_encode(["filas" => $filasAfectadas]);
      break;
  }
}