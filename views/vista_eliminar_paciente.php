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
            <h1 class="display-3 ">Información de Pacientes a Eliminar </h1>  
    </div>    


    <form action="<?php echo site_url('index/eliminar_paciente')?>" method="POST" enctype="multipart/form-data">
    <?php if ($paciente) { ?>
    <?php foreach ($paciente as $p) {  ?>  
    <div class="form-group">
        <label for="id">ID</label>
        <input type="number" class="form-control" id="id"  placeholder="" name="id" value="<?php echo $p->ID?>">
    </div>    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre"  placeholder="" name="nombre" value="<?php echo $p->NOMBRE?>">
    </div>
    <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" id="edad" aria-describedby="number" placeholder="" name="edad" value="<?php echo $p->EDAD?>">
    </div>
    
    <div class="form-group">
        <label for="diagnostico">Hospital:</label>
        <input type="text" class="form-control" id="hospital"  placeholder="" name="hospital" value="<?php echo $p->HOSPITAL?>">
    </div>
    <button class="btn btn-success">Eliminar</button>
    </form>
    <div>
        <button type="button" class="btn btn-secondary btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/')?>'">Regresar listado</
    </div>
    <?php } ?>  
    <?php }else{ ?>            
    <?php } ?>