<?php header ('Content-type: text/html; chartset=utf-8'); ?>
<!doctype html>


  <!-- return button to menu -->
  <div class="row">
    <div class="col-md-10"></div>
    <div class="col-6 col-md-2">
    <button type="button" class="btn btn-secondary btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/')?>'">Regresar listado</button>
    </div>
  </div>

    <div class="container-fluid">
        <div class="mx-auto">    
            <h1 class="display-3 ">Ingreso de Pacientes </h1>  
    </div>    

    <form action="<?php echo site_url('index/guardar_paciente')?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="id">Nombre:</label>
        <input type="number" class="form-control" id="id"  placeholder="ID" name="id">
    </div>    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre"  placeholder="Ingrese el nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" id="edad" aria-describedby="number" placeholder="Ingrese la edad" name="edad">
    </div>
    
    <div class="form-group">
        <label for="diagnostico">Diagnóstico:</label>
        <input type="text" class="form-control" id="diagnostico"  placeholder="Ingrese el Diagnóstico" name="diagnostico">
    </div>

    <div class="form-group">
        <label for="hospital">hospital:</label>
        <input type="text" class="form-control" id="hospital"  placeholder="Ingrese el hospital" name="hospital">
    </div>
    <button class="btn btn-success">Guardar</button>
    </form>
  
    </div>