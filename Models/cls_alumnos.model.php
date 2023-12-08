<?php
require_once('cls_conexion.model.php');
class Clase_Alumnos
{
    public function todos()
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `alumnos`";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function uno($cod_alumnos)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `alumnos` WHERE cod_alumnos=$cod_alumnos";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

    public function insertar($ced_alumnos, $nom_alumnos, $fecn_alumnos, $luz_alumnos, $dom_alumnos, $esp_alumnos, $niv_alumnos, $rep_alumnos)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "INSERT INTO `alumnos`(`ced_alumnos`, `nom_alumnos`, `fecn_alumnos`, `luz_alumnos`, `dom_alumnos`, `esp_alumnos`, `niv_alumnos`, `rep_alumnos`) VALUES('$ced_alumnos', '$nom_alumnos', '$fecn_alumnos', '$luz_alumnos', '$dom_alumnos', '$esp_alumnos', '$niv_alumnos', '$rep_alumnos')";
            //$cadena = "INSERT INTO `alumnos`(`ced_alumnos`, `nom_alumnos`, `fecn_alumnos`, `luz_alumnos`, `dom_alumnos`, `esp_alumnos`, `niv_alumnos`, `rep_alumnos`) VALUES('1400373583', 'ANTONIO AYUY', '1970-05-12', '054856', 'SEVILLA', 'CONTABILIDAD', 'PRIMERO BACHILLERATO', 'JUAN CARLOS')";
            //$cadena =sprintf("INSERT INTO `Usuarios`(`Cedula`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Contrasenia`, `Rol`) VALUES('%s','%s','%s','%s','%s','%s','%s'",mysqli_real_escape_string($con,$Cedula));
            $result = mysqli_query($con, $cadena);
            return 'ok';
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function actualizar($ced_alumnos, $nom_alumnos, $fecn_alumnos, $luz_alumnos, $dom_alumnos, $esp_alumnos, $niv_alumnos, $rep_alumnos,$cod_alumnos)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "UPDATE `alumnos` SET `ced_alumnos`='$ced_alumnos',`nom_alumnos`='$nom_alumnos',`fecn_alumnos`='$fecn_alumnos',`luz_alumnos`='$luz_alumnos',`dom_alumnos`='$dom_alumnos',`esp_alumnos`='$esp_alumnos',`niv_alumnos`='$niv_alumnos',`rep_alumnos`='$rep_alumnos' WHERE `cod_alumnos`= $cod_alumnos";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function eliminar($cod_alumnos)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "delete from alumnos where cod_alumnos=$cod_alumnos";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function actualizar_contrasenia($UsuarioId, $contrasenia)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "UPDATE `usuarios` SET `Contrasenia`='$contrasenia' WHERE `UsuarioId`=$UsuarioId";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

    public function cedula_repetida($cedula)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT count(*) as cedula_repetida FROM `usuarios` WHERE `Cedula`= '$cedula'";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function verifica_correo($correo)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT count(*) as cedula_repetida FROM `usuarios` WHERE `correo`= '$correo'";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function login($correo, $contrasenia)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            //$cadena = sprintf("SELECT * FROM `Usuarios` WHERE `Correo`= '%s' and `Contrasenia`='%s'",mysqli_real_escape_string($con,$correo),mysqli_real_escape_string($con,$contrasenia));
            $cadena = "SELECT * FROM `usuarios` WHERE `Correo`= '$correo'";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
}
