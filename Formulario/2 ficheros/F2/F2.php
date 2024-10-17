
<?php
if(isset($_POST ["nombre"])){
$nom=$_GET['nombre'];
echo "nombre: ".$nom;
$ape = $_GET['apellidos'];
echo "apellido: ".$ape;
}


/*if (isset($_GET['nombre']) && isset($_GET['apellidos'])) {
    $nombre_ingresado = $_GET['nombre'];
    $apellidos_ingresados = $_GET['apellidos'];

    if (in_array($nombre_ingresado, $nombres_existentes) && in_array($apellidos_ingresados, $apellidos_existentes)) {
        echo "El nombre '$nombre_ingresado' y los apellidos '$apellidos_ingresados' existen en la lista.";
    } else {
        echo "El nombre '$nombre_ingresado' o los apellidos '$apellidos_ingresados' no existen en la lista.";
    }
} else {
    echo "No se recibió ningún dato.";
}
    */
?>
