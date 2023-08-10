<?php header('Content-Type: text/html; charset=utf-8'); ?> 

<script>
var Loading = (loadingDelayHidden = 0) => {


let loading = null;
// Retardo para borrar
const myLoadingDelayHidden = loadingDelayHidden;


function hideLoading() {
    // Comprueba que exista el HTML
    if(loading !== null) {
        // Oculta el HTML de "cargando..." quitando la clase .show
        loading.classList.remove('show');

        // Borra el HTML
        setTimeout(function () {
            loading.remove();
        }, myLoadingDelayHidden);
    }

}


function init() {
    /* Comprobar que el HTML esté cargadas */
    document.addEventListener('DOMContentLoaded', function () {
        loading = document.querySelector('.loading');
        imgs = Array.from(document.images);
        lenImgs = imgs.length;

        /* Comprobar que todas las imágenes estén cargadas */
        if(imgs.length === 0) {
            // No hay ninguna
            hideLoading();
        } 
    });
}

return {
    'init': init
}
}

// Para usarlo se declara e inicia. El número es el tiempo transcurrido para borra el HTML una vez cargado todos los elementos, en este caso 1 segundo: 1000 milisegundos,
Loading(5000).init();

</script>


    <div class="container">
        <br><br><br><br><br>
        <div class="row justify-content-md-center">
            <div class="col col-lg-6">
                <table id="myTable0">  
                    <thead>
                        <th class="info" style="font-size:40px; text-align: center;">Módulo de prueba</th>
                    </thead>
                </table>
            </div>
        </div>      
    <div class="loading loading--show">
    <div class="row justify-content-md-center">
        <div class="loading loading--show">
            <ul class="fa-ul personalizado center" >
            <li><i class="fa-li fa fa-spinner fa-spin fa-10x center"></i></li>
            </ul> 
        </div>
        </div>
    </div>

<br><br><br><br><br><br><br><br><br>
<div>
<table id="myTable" class="table table-bordered table-striped table-condensed table-responsive table-hover">  
    <tbody>
    <td><center>
        <div class="col-12">
            <button type="button" class="btn btn-info btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/token/')?>'">Token</button>
        </div> 
    </td>
    </div>
    </tbody>
</table>
<table id="myTable" class="table table-bordered table-striped table-condensed table-responsive table-hover">  
    <tbody>
    <td><center>
        <div class="col-12">
            <button type="button" class="btn btn-info btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/autenticar/')?>'">Autenticar</button>
        </div>
    </td>
    </div>
    </tbody>
</table>        
<table id="myTable" class="table table-bordered table-striped table-condensed table-responsive table-hover">  
    <tbody>
    <td><center>
        <div class="col-12">
                <button type="button" class="btn btn-info btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/listar_paciente/')?>'">Pacientes</button>
            </div>
    </td>
    </div>
    </tbody>
</table>  

<table id="myTable" class="table table-bordered table-striped table-condensed table-responsive table-hover">  
    <tbody>
    <td><center>
        <div class="col-12">
            <button type="button" class="btn btn-info btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/crear_paciente/')?>'">Ingresar Pacientes</button>
            </div>
    </td>
    </div>
    </tbody>
</table>              

<table id="myTables" class="table table-bordered table-striped table-condensed table-responsive table-hover">  
    <tbody>
        <div class="form-group">    
            <td><center>
            <div class="col-12">
                <button type="button" class="btn btn-danger btn-lg col-lg-12" onClick="location.href='<?php echo site_url('/index/respawn_paciente/')?>'">Respawn Pacientes</button>
            </div> 
            </td>
        </div>
    </div>
    </tbody>
</table>
</div>

<hr>



