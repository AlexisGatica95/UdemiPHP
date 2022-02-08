<?php 

#Codigo imperativo o espagetti

$auto =(object)["marca"=>"toyota","modelo"=>"corola"];
$auto2 =(object)["marca"=>"hundai","modelo"=>"accent vision"];

function mostrar($automovil){
     echo "<br> hola soy un $automovil->marca, modelo $automovil->modelo <br>";
};

mostrar($auto);
mostrar($auto2);

?>