<?php 
/*NAMESPACES

Para encapsular elementos dentro de un "entorno" namespace
*/
//DEFINE

//class Product {}

//USE

//$product = new Product();

//NAMESPACES

//namespace App;

/*class Product {

}*/

//$product = new App\Product();
//o
use App;

//AUTOLOADERS

//Cargar clases o interfaces automática

spl_autoload_register();

/*
TRAITS
Para extender clases / métodos independientememnte de dondes estén definidos
*/
trait Say_World {
    public function say_hello() {
        echo 'Hello Trait';
    }
}

class Base {
    use Say_World;
    public function __construct() {
        
    }
}

$base = new Base();
$base->say_hello();

/**
 * SINGLETON
 * 
 * Restringe la instanciación de una clase a un objeto
 */


// TRAIT SINGLETOM

trait Singleton {
    public static function get_instance() {
        static $instance = [];
        $called_cass = get_called_class();
    }
}


































