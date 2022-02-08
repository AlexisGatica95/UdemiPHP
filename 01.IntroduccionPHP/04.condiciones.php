<?php 
#Condiciones : ejecuto una tarea deacuerdo a una condicion.

$a = 15;
$b = 10;

if($a>$b){
    echo "a es mayor que b";
} else if($a==$b){
    echo "a es igual que b";   
} else {
    echo "a es menor que b";
}

echo "<br><br>";

#Switch

$dia = "Sabado";

switch ($dia) {
    case 'jueves':
        echo "curso en la UNSO";
        break;
    case 'viernes':
        echo "estudio PHP e ingles";
        break;
    case 'sabado':
        echo "fumo porro y juego LOL";
        break;
    
    default:
        echo "estudio PHP";
        break;
}

echo "<br><br>";

#WHILE

$n = 1;
 while ($n < 5) {
     
    $n++;

    echo $n;
 }

echo "<br><br>";

#DO WHILE

$p = 1;

do{
    echo $p;
    $p++;
}while( $p <= 5);

#FOR
for ($i=0; $i < 5 ; $i++) { 
  echo $i;
}
?>