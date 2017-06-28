<?php
class figura{
	public $nombre;
	public $color;
	
	function __construct(){
		$this->nombre="";
		$this->color="";
	}
}
class triangulo extends figura{
	public $base;
	public $altura;
	
	function __construct(){
		$this->base=0;
		$this->altura=0;
	}
		
	function area(){
		return $this->base*$this->altura/2;	
	}
	function inicializar ($a,$b,$base,$altura){
		$this->nombre=$a;
		$this->color=$b;
		$this->base=$base;
		$this->altura=$altura;
	}
}

$figura= new triangulo();
$figura->inicializar("<b>Triangulo</b>","CCA564",8,14);
echo "El area de un triangulo que tiene como base 8 cm y de altura 14 cm es de; ";
echo $figura->area();
echo " cm";
?>