<?php

class DashboardControlador
{
  static public function ctrGerDatosDashboard()
  {
   $datos = DashboardModelo::mdlGetDatosDashboard();
   return $datos;
  }
}