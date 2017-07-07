<?php


class usuario {
    var $nomusuario;
    var $password;
    var $rol;
    
    function VerificaUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM usuario WHERE nombre_usuario='$this->nomusuario'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
}
