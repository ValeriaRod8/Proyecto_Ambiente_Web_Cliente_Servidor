<?php

require_once "../DAL/conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['request'])) {
        $request = $_REQUEST['request'];
        switch ($request) {
            case "eliminarCita":
                $id = $_REQUEST['id'];
                if (eliminarCita($id) == true) {
                    echo "Cita Eliminada Correctamente";
                }
                break;
        }
    }
}

function crearCita($especialista, $correoEspecialista, $correoCliente, $especialidad, $descripcion, $fecha, $notas)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("INSERT INTO cita (Especialista, CorreoEspecialista, CorreoCliente, Especialidad, Descripcion, Fecha, Notas) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $iEspecialista, $iCorreoEspecialista, $iCorreoCliente, $iEspecialidad, $iDescripcion, $iFecha, $iNotas);

            $iEspecialista = $especialista;
            $iCorreoEspecialista = $correoEspecialista;
            $iCorreoCliente = $correoCliente;
            $iEspecialidad = $especialidad;
            $iDescripcion = $descripcion;
            $iFecha = $fecha;
            $iNotas = $notas;

            if ($stmt->execute()) {
                $retorno = true;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

function actualizarCita($pIdCita, $pEspecialista, $pCorreoEspecialista, $pCorreoCliente, $pEspecialidad, $pDescripcion, $pFecha, $pNotas)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("UPDATE cita SET Especialista=?, CorreoEspecialista=?, CorreoCliente=?, Especialidad=?, Descripcion=?, Fecha=?, Notas=? WHERE Id = ?");
            $stmt->bind_param("sssssssi", $iEspecialista, $iCorreoEspecialista, $iCorreoCliente, $iEspecialidad, $iDescripcion, $iFecha, $iNotas, $iIdCita);

            $iIdCita = $pIdCita;
            $iEspecialista = $pEspecialista;
            $iCorreoEspecialista = $pCorreoEspecialista;
            $iCorreoCliente = $pCorreoCliente;
            $iEspecialidad = $pEspecialidad;
            $iDescripcion = $pDescripcion;
            $iFecha = $pFecha;
            $iNotas = $pNotas;

            if ($stmt->execute()) {
                $retorno = true;
            }

            $stmt->close();
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

function eliminarCita($pIdCita)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("DELETE FROM cita WHERE Id = ?");
            $stmt->bind_param("i", $iIdCita);

            $iIdCita = $pIdCita;

            if ($stmt->execute()) {
                $retorno = true;
            }

            $stmt->close();
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

function getArrayCita($sql)
{
    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            if (!$result = mysqli_query($oConexion, $sql)) die();

            $retorno = array();

            while ($row = mysqli_fetch_array($result)) {
                $retorno[] = $row;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

function testConectar()
{
    try {
        $oConexion = Conecta();
        echo "Conectado a la Base de Datos";
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }
}
?>
