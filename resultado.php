<?php
include 'header.php';
include 'funciones.php';

if (!isset($_POST['atencion']) || !isset($_POST['nombre']) || !isset($_POST['apellido']) || !isset($_POST['cedula']) || !isset($_POST['informacionRequerimiento'])) {
    //header('Location: index.php');
}





function anadirDatos(){
    $nombre = ucwords($_POST['nombre']);
    $apellido = ucwords($_POST['apellido']);
    $cedula = $_POST['cedula'];
    echo "  
            <h5>Nombre: ".$nombre."</h5>
            <h5>Apellido: ".$apellido."</h5>
            <h5>Cédula: V-".$cedula."</h5>";

    if(isset($_POST['direccion'])){
        $direccion = $_POST['direccion'];
        echo "<h5>Dirección: ".$direccion."</h5>";
    }
    if(isset($_POST['informacionLaboral'])){
        $informacionLaboral = $_POST['informacionLaboral'];
        echo "<h5>Información Laboral: ".$informacionLaboral."</h5>";
    }
}

?>



<br>

<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m2 l3"></div>
            <div class="col s12 m8 l6 card z-depth-3">
                <h1 class="card-title center">Resultados</h1>
                <div class="card-content">
                    <?php anadirDatos(); ?>
                </div>
                <div class="card-action">
                <div class="left">
                    <a href="index.php" class="waves-effect waves-light btn green darken-1 ">Volver</a>
                </div>
                <div class="right">
                    <a href="envio.php" class="waves-effect waves-light btn green darken-4 ">Enviar</a>
                    
                </div>
                <br>
                <br>
                    
                    
                </div>
            </div>
            <div class="col s12 m2 l3"></div>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>