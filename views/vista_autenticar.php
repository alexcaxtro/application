<?php header('Content-Type: text/html; charset=utf-8'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Mi Espacio Hospital Curicó</title>
</head>
<body>
    <div class="container ">
      <div class="bg-primary text-white d-flex rounded">
        <h1 class="mx-auto text-center" style="width: 960px;" >Hospital de San Juan de Dios de Curicó</h1>
      </div>
      <div class="d-flex p-1 bd-highlight"></div> 
      <div class="alert alert-warning" role="alert">
        <p>Estimado(a):</p>
        <p>La información que se presenta a continuación está regulada por las siguientes leyes:</p>
        <p><b>Ley 20.584</b> que Regula los Derechos y Deberes que tienen las Personas en Relación con Acciones Vinculadas a su Atención en Salud y <b>Ley 19.628</b> Sobre Protección de la Vida Privada.</p>
        <p class="font-italic">Esta información es privada y le pertenece solo al titular.</p>  
      </div>
      <!-- banner con el nombre del paciente -->
      <div class="d-flex p-1 bd-highlight"></div> 
    <div class="container">
      <div class="row bg-primary text-white d-flex rounded" >
        <div class="col-1">
          <svg xmlns="./assets/img/person-circle.svg" width="95" height="95" fill="white" class="bi bi-person-circle p-2" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        </div>
        <div class="col-11">
          <div class="h-50" >
            <div class="container">
              <h2 class="display-6" style="color: white;">Pedro Pérez</h2>
              <h5 style="color: white;">Rut: 11.111.111-1</h5>
              <div class="d-flex p-1 "></div> 
            </div>    
        </div>
        </div>
      </div>
    </div>
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

        <div class="d-flex p-3 bd-highlight"></div>     
    <!-- card con servicios para el paciente -->    
    <div class="container">
        <div class="row">
            <div class="card col-6 col-md-4" style="width: 10rem;">
          <img src="/projects/proyecto_prueba/assets/img/doctor_gray.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mis horas médicas</h5>
                  <p class="card-text">Todo lo relacionado con mis horas médicas</p>
                  <a href="#" class="btn btn-primary stretched-link">Ir</a>
                </div>
            </div>
            <div class="card col-6 col-md-4" style="width: 15rem;">
                <img src="/projects/proyecto_prueba/assets/img/medical_report_gray.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Recuperar mi Are</h5>
                  <p class="card-text">¿Se te perdió tú registro para atención? No te preocupes recupera tú Are</p>
                  <a href="#" class="btn btn-primary stretched-link">Ir</a>
                </div>
            </div>
            <div class="card col-6 col-md-4" style="width: 15rem;">
                <img src="/projects/proyecto_prueba/assets/img/examen_medico_gray.png" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mis resultados</h5>
                  <p class="card-text">Todo lo relacionado con mis exámenes médicos</p>
                  <a href="#" class="btn btn-primary stretched-link">Ir</a>
                </div>
            </div>
        </div>
        <div class="d-flex p-5 bd-highlight"></div> 
    </div>
        <!-- Separación entre tarjetas y footer-->
        <div class="d-flex p-5 bd-highlight"></div> 
          <div class="card text-center">
            <div class="card-header">
              Destacados
            </div>
            <div class="card-body">
              <h5 class="card-title">Rumbo al nuevo hospital</h5>
              <p class="card-text">Apertura gradual atención ambulatoria Hospital de Día</p>
              <a href="http://www.hospitalcurico.cl/web/index.php" class="btn btn-primary">Ir a página Web</a>
            </div>
            <div class="card-footer text-muted">
                © 2023 - Desarrollado por: Departamento de Informática Hospital de San Juan de Dios de Curicó
            </div>
          </div>
    </div>
</body>
</html>