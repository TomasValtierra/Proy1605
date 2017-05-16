<?php
$path='lib/';

include $path.'Conexion.php';
include $path.'usuario.php';

$oUsr= new usuario();

$oUsr->nombre='nuevo';
if($oUsr->VerificaUsuario())
    echo 'Existe';
else 
    echo 'no Existe';




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

