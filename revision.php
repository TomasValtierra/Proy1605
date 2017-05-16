<?php
$path='lib/';

include $path.'Conexion.php';
include $path.'usuario.php';

$oUsr= new usuario();

$oUsr->nombre='flopez';
$oUsr->clave='1234';

if($oUsr->VerificaUsuario() && $oUsr->VerificaUsuarioClave())
    echo 'Existe';
else 
    echo 'no Existe';




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

