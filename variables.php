<?php
// variable en clases
$__nombre="melo duarte";
echo gettype($__nombre);
$name="matthew duarte";
echo gettype($name);
$Name="melo matthew";
echo gettype($Name);
$edad= 36;
echo gettype($edad);
$esAlumno=true;
echo gettype($esAlumno);

// variable de manera global y en clases
const escuela = "codigo facilito";

// variable de manera solo global
define("curso",  "curso php profesional");


echo $__nombre, " ", $edad, " ", $esAlumno, " ", escuela, " ", curso;

?>