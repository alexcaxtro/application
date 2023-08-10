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
            <h1 class="display-3 ">Listado de Pacientes Dados de baja</h1>  
        </div>
        <div class="container">

 <hr>
        
        
      <table id="myTable32" class="table full-color-table full-info-table table-hover table-bordered"> 
          <thead class="table table-dark">
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
          <?php if ($p->ESTADO_PACIENTE==0) {  ?> 
          <tr>
            <td><?php echo $p->ID_PACIENTE?></td>
            <td><?php echo $p->NOMBRE?></td>
            <td><?php echo $p->EDAD?></td>
            <td style="width:25px">
            <button type="button" name="btn_cat" class="btn btn-info bi bi-heart-pulse-fill" onClick="location.href='<?php echo site_url('index/revivir_paciente?id='.$p->ID_PACIENTE.'')?>'"></button>
            </td>
          </tr>
          <?php }?> 
        <?php }?> 
        <?php }else {?>
        <?php }?>
        </tbody>
      </table>
  </div>
<button>
    <i class="fas fa-check"></i>
    <i class="fas fa-circle-notch fa-3x"></i>
    <span class="btn-text boton">Cargando</span>
</button>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>