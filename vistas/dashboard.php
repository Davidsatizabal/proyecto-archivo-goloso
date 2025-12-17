<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tablero Principal</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Tablero Principal</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<!-- Main content -->
<div class="content">
  <div class="container-fluid">

    <!-- fila -->
    <div class="row">

      <div class="col-lg-2">
        <div class="small-box bg-info">
          <div class="inner">
            <h4 id="totalProductos"></h4>
            <p>Productos registrados</p>
          </div>
          <div class="icon">
            <i class="ion ion-clipboard"></i>
          </div>
          <a style="cursor:pointer;" class="small-box-footer">
            Más Info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="small-box bg-success">
          <div class="inner">
            <h4 id="totalcompras"></h4>
            <p>Total compras</p>
          </div>
          <div class="icon">
            <i class="ion ion-cash"></i>
          </div>
          <a style="cursor:pointer;" class="small-box-footer">
            Más Info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="small-box bg-warning">
          <div class="inner">
            <h4 id="totalVentas"></h4>
            <p>Total Ventas</p>
          </div>
          <div class="icon">
            <i class="ion ion-clipboard"></i>
          </div>
          <a style="cursor:pointer;" class="small-box-footer">
            Más Info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="small-box bg-danger">
          <div class="inner">
            <h4 id="totalGanancias"></h4>
            <p>Total Ganancias</p>
          </div>
          <div class="icon">
            <i class="ion ion-clipboard"></i>
          </div>
          <a style="cursor:pointer;" class="small-box-footer">
            Más Info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="small-box bg-primary">
          <div class="inner">
            <h4 id="totalProductosMinStock"></h4>
            <p>Productos stock mínimo</p>
          </div>
          <div class="icon">
            <i class="ion ion-clipboard"></i>
          </div>
          <a style="cursor:pointer;" class="small-box-footer">
            Más Info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="small-box bg-secondary">
          <div class="inner">
            <h4 id="totalVentasHoy">$</h4>
            <p>Ventas del Dia</p>
          </div>
          <div class="icon">
            <i class="ion ion-clipboard"></i>
          </div>
          <a style="cursor:pointer;" class="small-box-footer">
            Más Info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      

    </div><!-- /.row -->

  </div><!-- /.container-fluid -->
</div><!-- /.content -->

<script>
  $(document).ready(function () {

    $.ajax({
      url: "ajax/dashboard.ajax.php",
      method: "POST",
      dataType: "json",      
      success: function (respuesta) {
        console.log("respuesta",respuesta);
        $("#totalProductos").html(respuesta[0]['totalProductos']);
        $("#totalcompras").html(respuesta[0].totalCompras);
        $("#totalVentas").html(respuesta[0].totalVentas);
        $("#totalGanancias").html(respuesta[0].totalGanancias);
        $("#totalProductosMinStock").html(respuesta[0].totalProductosMinStock);
        $("#totalVentasHoy").html(respuesta[0].totalVentasHoy);
      }
    });  
  });
</script>