<?php  
use Illuminate\Database\Capsule\Manager as DB;

require "vendor\autoload.php";
require "config\database.php";

DB::table('calificaciones')->whre('idcalificacion',$_GET['id'])->delete();

echo "Se elimino correctamente la calificacion con el id:{$_GET['id']}
<a class='button' href='consultar.php'>REGRESAR</a>";