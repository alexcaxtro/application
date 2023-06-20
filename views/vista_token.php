<!doctype html>
<html>

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