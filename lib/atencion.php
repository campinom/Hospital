<?php

class atencion {
    var $fechaatencion;
    var $horaatencion;
    var $estado;
    var $pacienteatendido;
    var $medicotratante;
    
 function VerificaAtencion(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM atencion WHERE rut_paciente='$this->pacienteatendido'";
        
        $resultado=$db->query($sql);
               
        if ($resultado->num_rows>=1)
            return true;
        else
            return false;
        
    }
    
 function AgendarAtencion(){
     $oConn=new conexion();
     
     if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
     $sql="INSERT into atención(fecha_atención, hora_atencion, estado, paciente_atendido, medico_tratante) 
          VALUES ('2017-07-07','14:00','pendiente','190944883',181358180)";
     
     $resultado=$db->query($sql);
     
     if ($resultado->num_rows>=1)
            echo 'se ha creado la atención exitosamente';
        else
            echo 'No se ha podido agendar la atencion';
    
 }
 
 function ListarAtencion(){
     $oConn=new conexion();
     
     if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
     $sql="SELECT * FROM atencion";
     
     $resultado=$db->query($sql);
     
     if ($result->num_rows >= 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idatencion"]. " - Fecha atencion: " . $row["fecha_atencion"]. "  - Hora atencion: " . $row["fecha_atencion"]." - estado ".$row["estado"]." Paciente ".$row[Paciente_atendido]." Medico tratante ".$row[Medico_tratante]. "<br>";
    }
} else {
    echo "No se encontraron atenciones";
}
 }
 
 
}
