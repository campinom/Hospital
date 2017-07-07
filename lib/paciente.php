<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paciente
 *
 * @author Rufino
 */
class paciente {
    
    var $rutpaciente;
    var $nombrepaciente;
    var $fechanacimiento;
    var $direccion;
    var $telefonofijo;
    var $telefonomovil;
    
    function VerificaPaciente(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM paciente WHERE rut_paciente='$this->rutpaciente'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
    function ListaPaciente(){
        $oConn=new conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM paciente";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return $resultado;
        else
            return false;
        
        
    }
    
}
