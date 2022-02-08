<?php 
#variable numerica
$numero = 5;
echo $numero;
echo "<br> esto es una cadena con una var tipo numero con valor : $numero <br>";

#var texto
$palabra = "text";
echo "<br>esto es una variable de tipo text con valor: $palabra <br>";

#var boolena
$booleana = true;
echo "<br>esto es una variable de tipo booleana con valor: $booleana <br>";

#var array
$colores = array("rojo","amarillo","azul");
echo "<br> esto es una variable de tipo array y muestro el color: $colores[0] <br>";

#var array con propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla", "verdura3"=>"tomate");
echo "<br> esto es un array con propiedades, con valor de: $verduras[verdura2] <br>";

#var obj
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "<br> esta es una variable de tipo obj: $frutas->fruta2 <br>" ;

# la variable var dump me sirve para identificar variables en PHP, y asi tambien identificar errores
?>