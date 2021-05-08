<?php
class Car{
    const WHEELS=4;
    public function test(){
        echo Car::WHEELS;
        echo Bicycle::WHEELS;
        echo self::WHEELS;
    }
}
class Bicycle{
    const WHEELS=2;
    public function test(){
        echo '<br>';
        echo Car::WHEELS;
        echo Bicycle::WHEELS;
        echo self::WHEELS;
        echo '<br>';
    }
}
$car1=new Car;
$car1->test();

$car2=new Bicycle();
$car2->test();
echo '<br>';
echo Car::WHEELS;
echo '<br>';
echo Bicycle::WHEELS;