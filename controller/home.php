<?php
$titulo ="Bienvenidos al inicio";
$contenido = "hola";

$variables =array ('titulo'=>$titulo, 'contenido'=> $contenido);

view('home',$variables);
?>