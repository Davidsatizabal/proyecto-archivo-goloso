 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0"> Tabla / Datos</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="#">Inicio</a></li>
           <li class="breadcrumb-item active"> Tabla / Datos</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12">
         <div class="card card-info">
           <div class="card-header">
             <h3 class="card-title">Criterios de Búsqueda</h3>
             <div class="card-tools">
               <div class="button">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                   <i class="fas fa-minus"></i>
                 </button>
                 <button type="button" class="btn btn-tool" id="btnLimpiarBusqueda">
                   <i class="fas fa-minus"></i>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-lg-12">
       <table id="tbl_productos" class="table table-striped w-100 shadow">
         <thead>
           <tr>
             <th></th>
             <th>id</th>
             <th>Caja</th>
             <th>Detalle</th>
             <th>Td</th>
             <th>Cc/nit</th>
             <th>Dependencia</th>
             <th>Area</th>
             <th>Mes</th>
             <th>Año</th>
             <th>Num/carprta</th>
             <th>Ubicacion</th>
             <th>Info adicional</th>
             <th>Fecha Actualizacion</th>
             <th class="text center">Opciones</th>
         </tr>
       </thead>
       <tbody>
          <?php
            require_once "../modelos/conexion.php";
            $pdo = Conexion::conectar();
            $stmt = $pdo->prepare("SELECT * FROM datos");
            $stmt->execute();
            while ($datos = $stmt->fetch(PDO::FETCH_OBJ)) {
          ?>
            <tr>
              <td></td>
              <td><?php echo htmlspecialchars($datos->id ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->caja ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->detalle ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->td ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->cedula_o_nit ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->dependencia ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->area ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->mes ?? ""); ?></td>
              <td><?php echo htmlspecialchars(($datos->anio ?? ($datos->año ?? ""))); ?></td>
              <td><?php echo htmlspecialchars($datos->numero_carpeta ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->ubicacion ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->info_adicional ?? ""); ?></td>
              <td><?php echo htmlspecialchars($datos->fecha_actualizacion ?? ""); ?></td>
              <td></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
