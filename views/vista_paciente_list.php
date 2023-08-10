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
            <h1 class="display-3 ">Listado de Pacientes </h1>  
        </div>
        <div class="container">

<table id="myTables" >  
    <tbody>
        <div class="form-group">    
            <td><center>
                <div class="col-md-12 ">
                <button type="button" class="btn btn-success btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/crear_paciente/')?>'">Ingresar un Nuevo Pacientes</button>
            </div>
            </td>
        </div>
    </div>
    </tbody>
</table>
 <hr>
        
        
      <table id="myTable32" class="table full-color-table full-success-table table-hover table-bordered"> 
          <thead>
          <tr>
            <th class="success">Id</th>
            <th class="success">Nombre</th>
            <th class="success">Edad</th>
            <th class="success"> Acciones </th>
          </tr>
        </thead>

        <tbody>
        <?php if ($paciente) { ?>
        <?php foreach ($paciente as $p) {  ?> 
          <?php if ($p->ESTADO_PACIENTE==1) {  ?> 
          <tr>
            <td><?php echo $p->ID_PACIENTE?></td>
            <td><?php echo $p->NOMBRE?></td>
            <td><?php echo $p->EDAD?></td>
            <td style="width:100px">
            <button type="button" name="btn_cat" class="btn btn-info bi bi-eye-fill" onClick="location.href='<?php echo site_url('index/detalle_paciente/'.$p->ID_PACIENTE.'')?>'"></button>
            <button type="button" name="btn_cat" class="btn btn-danger bi bi-trash3" onClick="location.href='<?php echo site_url('index/borrar_paciente/'.$p->ID_PACIENTE.'')?>'"></button>
            </td>
          </tr>
          <?php }?> 
        <?php }?> 
        <?php }else {?>
        <?php }?>
        </tbody>
      </table>
  </div>