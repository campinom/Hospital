<?php

class verificaCancelar {
    
$PATH='lib/';
include $PATH.'Conexion.php';
include $PATH.'atencion.php';

$oAte=new atencion();
$oAte->CancelarAtencion();
       

?>
}

