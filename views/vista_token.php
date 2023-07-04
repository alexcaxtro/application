<!doctype html>
<html>
 <!-- return button to menu -->
 <div class="row">
    <div class="col-md-10"></div>
    <div class="col-6 col-md-2">
    <button type="button" class="btn btn-secondary btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/')?>'">Regresar listado</button>
    </div>
  </div>

<body>
    <div class="container-fluid">
        <div class="mx-auto">    
            <h1 class="display-3 ">Token Único de Acceso</h1>  
        </div>    
    </div>    
<?php echo $token; ?>

<?php echo '<pre>';
        print_r("Iniciaste sesión el ". $fecha_de_sesion. " a las " .$hora_de_sesion );
        echo '</pre>';
?>        

</body>
</html>