<?php 

if (!empty($_POST["btnModificar"])){
    if( !empty($_POST["inputEspecialista"])  and !empty($_POST["inputCorreoEspecialista"]) and !empty($_POST["inputCorreoCliente"]) 
    and !empty($_POST["inputEspecialidad"]) and !empty($_POST["inputDescripcion"]) and !empty($_POST["inputFecha"]) and !empty($_POST["inputNotas"]) ){
        $id=$_POST["id"];
        $especialista = $_POST["inputEspecialista"];
        $correoEspecialista = $_POST["inputCorreoEspecialista"];
        $correoCliente = $_POST["inputCorreoCliente"];
        $especialidad = $_POST["inputEspecialidad"];
        $descripcion = $_POST["inputDescripcion"];
        $fecha = $_POST["inputFecha"];
        $notas = $_POST["inputNotas"];

        
        $sql = $conexion->query("UPDATE cita SET Especialista='$especialista', CorreoEspecialista='$correoEspecialista', CorreoCliente='$correoCliente', Especialidad='$especialidad', Descripcion='$descripcion', Fecha='$fecha', Notas='$notas' WHERE Id = $id");
        header("Location: listarCitas.php");
    }else{
        echo"<div class='alert alert-warning mt-3' role='alert' id='mensajeError'>
        Los campos están vacíos.
        </div>";
    }
    
}


?>