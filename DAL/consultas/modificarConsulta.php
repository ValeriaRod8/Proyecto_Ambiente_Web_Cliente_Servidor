<?php 


if (!empty($_POST["btnModificar"])){
    if( !empty($_POST["nombre"])  and !empty($_POST["telefono"]) and !empty($_POST["correo"]) and !empty($_POST["detalle"]) ){
        $id=$_POST["id"];
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $detalle = $_POST["detalle"];
        
        $sql=$conexion->query("update consultas set Nombre='$nombre', Telefono='$telefono', Correo='$correo', Detalle='$detalle'  where Id= $id");
        header("Location: consultas.php");
    }else{
        echo"<div class='alert alert-warning mt-3' role='alert' id='mensajeError'>
        Los campos están vacíos.
        </div>";
    }
    
}

?>