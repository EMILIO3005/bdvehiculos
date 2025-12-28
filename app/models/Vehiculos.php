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

  public function registrar($registro = []){
    try{
      $sql = " 
      INSERT INTO vehiculos
        (placa, marca, gama, modelo, fechaFabricacion, color, tipo_combustible, precio) VALUES
        (?,?,?,?,?,?,?,?)
        
        ";

        $consulta = $this->pdo->prepare($sql);
        $consulta->execute(
          array(
           $registro['placa'],
           $registro['marca'],
           $registro['gama'],
           $registro['modelo'],
           $registro['fechaFabricacion'],
           $registro['color'],
           $registro['tipo_combustible'],
           $registro['precio']
         ));

         return $this->pdo->lastInsertId();
    }
    catch(Exception $e){
      return -1;
    }
  }


  public function eliminar($id){
    try{
      $sql = "DELETE FROM vehiculos WHERE id = ?";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute(array($id));

      return $consulta->rowCount();
    }
    catch(Exception $e){
      return -1;
    }
  }


  public function actualizar($registro =[]){
    try{
      $sql = "
      UPDATE vehiculos SET
      placa = ?,
      marca = ?,
      gama = ?,
      modelo = ?,
      fechafabricacion = ?,
      color = ?,
      tipo_combustible = ?,
      precio = ?
      WHERE id = ?
      ";

      $consulta = $this->pdo->prepare($sql);
      $consulta->execute(
          array(
         $registro['placa'],
         $registro['marca'],
         $registro['gama'],
         $registro['modelo'],
         $registro['fechaFabricacion'],
         $registro['color'],
         $registro['tipo_combustible'],
         $registro['precio'],
         $registro['id']
      ));

        return $consulta->rowCount();
    }
    catch(Exception $e){
      return -1;
    }
  }

  public function buscarid($id){
    try{
      $sql = "SELECT * FROM vehiculos WHERE id = ?";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute(array($id));

      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      return [];
    }
  }
} 
