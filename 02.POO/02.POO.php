<?php

#CLASE
#Una clase es un modelo que se utiliza para crear objetos con un mismo comportamiento , un mismo estado y una misma identidad.

#Declaro la clase:

class Auto{
    #PROPIEDADES
    #son las caracteristicas que puede tener un objeto.
    
    public $modelo;
    public $marca;

    #METODO
    #es el algoritmo asociado a un objeto que indica la capacidad que este puede hacer.

    public function mostrar(){

      echo "<p>Hola! soy un $this->marca, modelo $this->modelo</p>";

    }
}

#Declaro el objeto:
#una entidad provista de metodos o mensajes a los cuales responde propideades con valores concretos.

$a = new Auto();
$a -> marca = "Toyota";
$a -> modelo = "corolla";
$a -> mostrar();

?>