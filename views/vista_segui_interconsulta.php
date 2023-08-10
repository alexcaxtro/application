<?php header('Content-Type: text/html; charset=utf-8'); ?> 
<form id="form_busqueda_rut" name="form_busqueda_rut" method="post" enctype="multipart/form-data" action="<?php echo site_url('index/buscar_datos_paciente_segui')?>">

<div class="container">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"></h4>
        </div>
        <div class="col-md-12 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="<?php echo site_url('/index') ?>">Inicio</a>
                </nav>
            </div>
        </div>
    </div>

    <table id="myTable" class="table full-color-table full-info-table table-hover table-bordered">
        <thead>
            <th class="info" style="font-size:40px" ><center>SEGUIMIENTO INTERCONSULTAS</center></th>
        </thead>
    </table>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Rut Paciente</th>
          <th scope="col">Nombre Paciente</th>
          <th scope="col">Servicio</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Pedro</td>
          <td>Otorrino</td>
          <td><input type="submit" name="submit" id="submit" class="btn btn-primary col-lg-4" value="VER"></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>María</td>
          <td>Cirugía</td>
          <td><input type="submit" name="submit" id="submit" class="btn btn-primary col-lg-4" value="VER"></td>
        </tr>
      </tbody>
    </table>

</div>

</form>
<br><br><br><br>
