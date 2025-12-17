<?php

require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelos.php";

class AjaxDashboard
{
  public function getDatosDashboard()
  {
    $datos = DashboardControlador::ctrGerDatosDashboard();
    echo json_encode($datos);
  }
}

$datos = new AjaxDashboard();
$datos->getDatosDashboard();