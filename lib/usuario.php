<?php

class usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;
    
    
    function verificaUsuario(){
        $oConn = new Conexion();
        if($oConn->conectar())
        
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre'";
        
        $resultado = $db->query($sql);
        
        if($resultado->num_rows)
            return true;
        else 
            return false;
        
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

