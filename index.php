<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задания:</title>
</head>
<body>
<?php
class Car{
    const WHEELS=4;
    /*
     public $color='White'; Здесь мы задаем значения по умолчанию
     public $speed;
     public $fuel;
     public $brand;
 */
    public function __construct( $color = 'White', $speed = 100, $fuel = 1, $brand = 1)
    {
        $this->color=$color;
        $this->speed=$speed;
        $this->fuel=$fuel;
        $this->brand=$brand;
        echo $color;
    }
    public function tripTime($distance)
    {
        $time=$distance/$this->speed;
        return $time;
    }
}
class Bicycle{
    const WHEELS=2;
}
$car1=new Car;
/*$car1=new Car;   'Black',120,14,'Audi'
$car1->color='Black';
$car1->brand='BMV';
$car1->speed=130;
$car1->fuel=12;
*/
$car2=new Car( 'Yelloy',210,17,'BMV');
echo '<br>Car 1 time:'.$car1->tripTime(1000);
echo '<br>';
echo '<br>Car 2 time:'.$car2->tripTime(1000);
echo '<br>';
echo Car::WHEELS;
echo '<br>';
echo Bicycle::WHEELS;
?>
<p><a href="http://class/index2.php">Test</a></p>
</body>
</html>