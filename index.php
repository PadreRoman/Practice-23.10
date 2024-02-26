<?php

interface CarInterface // Интерфейс с включёнными методами
{
	public function moveDipper($move); 
	public function check();
	public function vehicleHorn();
	public function vehicleWipers();
	public function vehicleMove();
	public function vehicleN2O(); 
}

class Car implements CarInterface // Абстрактный класс с описанием базовых свойств и доступных для применения методов из интерфейса
{
	public $moveForward = '->->->->';
	public $moveBack = '<-<-<-<-';
	
	
	
	public function moveDipper($move)
	{
		if ($move == 1){
		echo $this->moveUp;
		} elseif($move == 2){
		echo $this->moveDown; }
	}
	
	public function check()
	{
		
	}
	
	
	public function vehicleHorn()
	{
			echo $this->horn;
	}
	
	public function vehicleWipers()
	{
			echo $this->wipers = 'Wipers on';
	}
	
	public function vehicleMove()
	{

	}
	
	public function vehicleN2O()
	{
		
	}
	
}

class Digger extends Car
{
	public $wipers;
	public $horn = 'beeeep';
	public $moveUp = 'move dipper up';
	public $moveDown = 'move dipper down';
	
		public function vehicleMove()
	{
		echo "Машина двигается : " . $this->moveForward . " , " . "Машина поднимает ковш : ";
		echo $this->moveDipper(1);
	}

}

class Volvo extends Car
{
	public $wipers;
	public $horn = 'beeeep';
	public $n2o = 'nitrogen oxide on';
	public $color = 'red';
	public $interior = 'leather';
	public $length = 4798;
	public $height = 1743;
	
	public function check()
	{
		echo "Цвет - $this->color. Салон - $this->interior. Длинна - $this->length. Высота - $this->height.";
	}
	
	public function vehicleMove()
	{
		echo "Машина двигается : " . $this->moveForward . " , " . "Машина включает закись озота : ";
		echo $this->vehicleN2O();
	}
	
	public function vehicleN2O()
	{
		echo $this->n2o;
	}
	
}

class MoveVehicle
{
	/*
	public function move(Car $vehicle)
	{
		$vehicle->vehicleMove();
	}
	*/
	
	public static function move($car) //статический класс с последующим вызовом его в перемнной $var
	{
		$class_name = $car;
		$object = new $class_name;
		return $object;
	}
	
}

/*
$digger = new Digger();

$raseCar = new Volvo();

$moveDigger = new MoveVehicle();

$moveDigger->move($digger);

echo "<br>";

$moveCar = new MoveVehicle();

$moveCar->move($raseCar);
*/

$var = MoveVehicle::move('Volvo');
$var->vehicleMove();