<?php
class MiClase{
    const constante ='valor constante';
    function mostrarConstante(){
        echo self::constante."\n";
    }
}

abstract class ClaseAbstracta{
    //Se fuerza la herencia de la clase para definir estos metodos
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);
    //metodo Comun
    public function printOut(){
        print $this->tomarValor(). "<br>";
    }
}
class ClaseConcretal extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcretal";
    }
    public function prefixValor($prefix){
        return "{$prefix}ClaseConcretal";
    }
}

class ClaseConcreta2 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta2";
    }
    public function prefixValor($prefix){
        return"{prefix}ClaseConcreta2";
    }
}

interface iTemplate{
    public function ponerVariable($nombre, $var);
    public function verHtml($template);
}

class Template implements iTemplate{
    private $vars =array();
    public function ponerVariable($nombre, $var){
        $this->vars[$nombre]=$var;
    }
    public function verHtml($template){
        foreach($this->vars as $nombre =>$value){
            $template=str_replace('{'.$nombre.'}',$value,$template);
        }
        return $template;
    }
}

class SubObject{
    static $instances=0;
    public $instance;

    public function __construct(){
        $this->instance= ++self::$instances;
    }
    public function __clone(){
        $this->instance= ++self::$instances;
    }
}

class MyCloneable{
    public $object1;
    public $object2;

    function __clone()
    {
        $this->object1 = clone $this->object1;
    }
}

class Cilindro{
    protected $pi;
    protected $diametro;
    protected $altura;
    protected $radio;

    function __construct ($d,$a){
        $this->diametro =$d;
        $this->altura =$a;
        $this->pi=3.141593;
        $this->radio=$d/2;
    }

    function obtener_radio(){
        return $radio;
    }

    function calc_volumen(){
        return $this->pi*$this->radio*$this->radio*$this->altura;
    }

    function calc_area(){
        return 2*$this->pi*$this->radio*($this->radio+$this->altura);
    }
}

class Factorial
    {
        protected $porc;
        
        function __construct ($p){
            $this->porcentaje =$p;
            $this->i=1;
            $this->factorial=1;
        }
    
        function obtieneFactorial()
        {
            for ($j=1;$j<=$this->porcentaje;$this->i++){
                $this->factorial=$this->factorial*$j;
            }
            return $this->factorial;
        }
    }
?>