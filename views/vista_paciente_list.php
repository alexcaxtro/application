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
 

        
        
      <table id="myTable32" class="table full-color-table full-info-table table-hover table-bordered"> 
          <thead>
          <tr>
            <th class="success">Nombre</th>
            <th class="success">Edad</th>
            <th class="success">Diagnóstico</th>
          </tr>
        </thead>

        <tbody>
        <?php if ($paciente) { ?>
        <?php foreach ($paciente as $p) {  ?> 
          <tr>
            <td><?php echo $p->NOMBRE?></td>
            <td><?php echo $p->EDAD?></td>
            <td><?php echo $p->DIAGNOSTICO?></td>
          </tr>
        <?php }?>
        <?php }else {?>
        <?php }?>
        </tbody>

      </table>
  </div>