<?php

class medico {
    
    var $rutmedico;
    var $nombremedico;
    var $fechacontrato;
    var $especialidad;
    var $valconsulta;
    
    
    function VerificaMedico(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM paciente WHERE rut_medico='$this->rutmedico'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
}
