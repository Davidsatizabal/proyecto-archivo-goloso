<?php

require_once "conexion.php";

class DashboardModelo
{
  static public function mdlGetDatosDashboard(){
    $stmt = Conexion::conectar()->prepare("call prc_obtener_datos_dashboard()");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}