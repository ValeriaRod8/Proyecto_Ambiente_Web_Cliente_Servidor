<?php

require_once "../conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getJSON();
}

function crearConsulta($pEspecialista, $pCorreoEspecialista, $pCorreoCliente, $pEspecialidad, $pDescripcion, $pFecha, $pNotas)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("insert into cita (Especialista, CorreoEspecialista, CorreoCliente, Especialidad, Descripcion, Fecha, Notas) values (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $iEspecialista, $iCorreoEspecialista, $iCorreoCliente, $iEspecialidad, $iDescripcion, $iFecha, $iNotas);

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
        }
    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($oConexion);
    }

    return $retorno;
}

//$pEspecialista, $pCorreoEspecialista, $pCorreoCliente, $pEspecialidad, $pDescripcion, $pFecha, $pNotas
function actualizarConsulta($pId, $pEspecialista, $pCorreoEspecialista, $pCorreoCliente, $pEspecialidad, $pDescripcion, $pFecha, $pNotas)
{
    $retorno = false;

    try {
        $oConexion = Conecta();
//UPDATE cita SET Especialista = ?, CorreoEspecialista = ?, CorreoCliente = ?, Especialidad = ?,Descripcion = ?,Fecha = ?, Notas = ? WHERE Id = ?;
        if (mysqli_set_charset($oConexion, "utf8")) {
            $stmt = $oConexion->prepare("UPDATE cita SET Especialista = ?, CorreoEspecialista = ?, CorreoCliente = ?, Especialidad = ?, Descripcion = ?, Fecha = ?, Notas = ? WHERE Id = ?");
            $stmt->bind_param("ssssi", $iEspecialista, $iCorreoEspecialista, $iCorreoCliente, $iEspecialidad, $iDescripcion, $iFecha, $iNotas, $iId);

            $iEspecialista = $pEspecialista;
            $iCorreoEspecialista = $pCorreoEspecialista;
            $iCorreoCliente = $pCorreoCliente;
            $iEspecialidad = $pEspecialidad;
            $iDescripcion = $pDescripcion;
            $iFecha = $pFecha;
            $iNotas = $pNotas;
            $iId = $pId;

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

function eliminarConsulta($pId)
{
    $retorno = false;

    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {
            //DELETE FROM cita WHERE Id = ?;
            $stmt = $oConexion->prepare("delete from cita where Id = ?");
            $stmt->bind_param("i", $id);

            $id = $pId;

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

function getArrayConsulta($sql)
{
    try {
        $oConexion = Conecta();

        //generar la consulta
        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, $sql)) die(); //cancelamos el programa

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

function getJSON()
{
    try {
        $oConexion = Conecta();

        if (mysqli_set_charset($oConexion, "utf8")) {

            if (!$result = mysqli_query($oConexion, "SELECT Id, Especialista, CorreoEspecialista, CorreoCliente, Especialidad, Descripcion, Fecha, Notas FROM cita"))
                die();

            $retorno = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $retorno[] = $row;
            }
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
    } finally {
        Desconecta($oConexion);
    }
    return json_encode($retorno);
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
