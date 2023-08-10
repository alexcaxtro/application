<?php header('Content-Type: text/html; charset=utf-8'); ?> 
<form id="form_busqueda_rut" name="form_busqueda_rut" method="post" enctype="multipart/form-data" action="<?php echo site_url('index/buscar_datos_paciente')?>">

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
            <th class="info" style="font-size:40px" ><center>INTERCONSULTAS</center></th>
        </thead>
    </table>
            

    <div class="form-group row" >
    <div>
        <label class="col-md-2 text-right">Rut Paciente:</label>
            <div class="col-md-2" >
                <input id="rut" name="rut" type="text" class="form-control input-md" style="border: 1px solid;" required="true">
            </div>
        </div>
    <div class="col-md-4">
            <input type="submit" name="submit" id="submit" class="btn btn-success col-lg-12" value="BUSCAR">
    </div>

    </div>

</div>

</form>
<br><br><br><br>
