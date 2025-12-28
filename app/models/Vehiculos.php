<?php

require_once 'Conexion.php';

class Vehiculos extends Conexion{

  private $pdo;


  public function __construct(){
    $this->pdo = parent::getConexion();
  }

  public function listar(){
    try{

      $sql ="
      SELECT
      id, placa, marca, gama, modelo, fechaFabricacion, color, tipo_combustible, precio
      FROM vehiculos
      ORDER BY id DESC
      ";

      $consulta = $this->pdo->prepare($sql);

      $consulta->execute();

      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
     return[]; 
    }
      
  }
} 