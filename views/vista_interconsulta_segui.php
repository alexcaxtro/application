<?php header('Content-Type: text/html; charset=utf-8'); ?> 
<form id="form_inter_consulta" name="form_guarda_bandeja" method="post" enctype="multipart/form-data" action="<?php echo site_url('index/guardar_interconsulta')?>">

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
            <th class="info" style="font-size:40px" ><center>Seguimiento de InterConsultas</center></th>
        </thead>
    </table>
    
    <?php if ($datos) { ?>
        <?php foreach ($datos as $d) {  ?> 
        
        <?php }?> 
        <?php }else {?>
        <?php }?>

    
    <table id="myTable" class="table table-bordered table-striped table-condensed table-responsive table-hover">  
        <thead>
            <th>Nombre Paciente</th>
            <th>Rut</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha Solicitud</th>
            
        </thead>
        <tbody>
         <?php if ($datos) { ?>
        <?php foreach ($datos as $d) {  ?> 
            <tr>
                <td><?php echo $d->APEPAT." ".$d->APEMAT." ".$d->NOMBRE?></td>
                <td><?php echo $d->RUT."-".$d->DIGITO?></td>
                <td><?php echo $d->EDAD?></td>
                <td><?php echo $d->SEXO?></td>
                <td><?php print_r("  ". $fecha_de_inter);?></td>   
            </tr>              
        <?php } ?>  
        <?php }else{ ?>            
        <?php } ?>
        </tbody>
    </table>
    
    <div class="container form-group row">

              <label for="observaciones">Observaciones</label>
              <textarea class="form-control" id="observaciones" rows="2" disabled placeholder="Complicaciones por diabetes"></textarea>
    </div>

        <div class="container form-group row">

              <label for="observaciones">Hipótesis diagnóstica</label>
              <textarea class="form-control" id="hipotesis_diagnostica" rows="2" disabled placeholder="Aparecen ciertos síntomas, qué sucede en realidad"></textarea>
        </div>
            <label for="observaciones">Comentarios:</label>
            <textarea class="form-control" id="hipotesis_diagnostica" rows="2"> </textarea>   
    </table>    
    </div>  
    </form>
    
    <!-- --------------Modal  ---------------------------------->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="guardadoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="guardadoModalLabel">Guardado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              La Información se ha guardado
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
    </div>
    
    <!-- --------------Clave del médico ---------------------------------->
                        
    <div class="container"> 
                        <div class="form-group row">
                                <label class="col-md-2 text-right:">Confirmar solicitud</label>
                                <div class="col-md-2">
                                    <input id="pass" name="pass" type="password" class="form-control input-md" style="border: 1px solid;" required="true">
                                </div>
                                <div class="col-md-4">
                                    <input id="usuario" name="usuario" type="text" class="form-control input-md" disabled="" required="true">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" id="submit" class="btn btn-success col-lg-12" disabled="" value="GUARDAR">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="id_usu" id="id_usu" hidden required="true"/>
                                </div>
                        </div> 
    </div>
</div>

<script>
$("#fecha").datepicker({
    language:'es',
    weekStart:1,
    autoclose:true,
    forceParse:true,
    format:'dd/mm/yy'
});
</script>

<script>
$(document).ready(function($){
    $('#medicos').autocomplete({
        source:'<?php echo site_url('index_biopsias/medicos');?>', 
        minLength:2,
        html: true, 
        open: function(event, ui){
            $(".ui-autocomplete").css("z-index", 1000);
        }
    });
});
</script>

<script>
$("#medicos").keyup(function(){
     $(this).val($(this).val().toUpperCase());
});
</script>