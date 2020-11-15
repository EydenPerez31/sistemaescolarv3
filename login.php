<?php 
use Illuminate\Database\Capsule\Manager as DB;

require "vendor\autoload.php";
require "config\database.php";

$user = DB::table('usuarios')
->leftjoin('perfiles','usuarios.idperfil', '=','perfiles.idperfil')
->where('nombreusuario', $_POST['usuario'])->first();

$mensaje = '';
if ($user->password == $_POST['password']) {
    $mensaje = "<h1> Okairi: {$user->nombreperfil} {$user->nombreusuario}</h1>
    <br><a href='inicio.php?idusuario={$user->idusuario}'>Entra al sistema escolar</a>";
}else{
    $mensaje = "<h1> USUARIO Y/O CONTRASEÑA INCORRECTOS, PORFA VERIFIQUE Y DEJESE DE WEBADAS</h1>
    <br><a href='index.html'>Regresar </a>";
}

echo $mensaje;