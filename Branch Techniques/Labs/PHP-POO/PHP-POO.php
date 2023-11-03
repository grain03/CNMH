<!DOCTYPE html>
<html>
<body>
<?php

class Car {
  protected $brand;
  protected $model;
  public $price;

  function __construct($brand, $model, $price){
    $this->brand = $brand;
    $this->model = $model;
    $this->price = $price;
  }

  function __destruct(){
    echo $this->brand . " " .$this->model . " Costs " . $this->price . " And " ;
  }
}


$Volkswagen  = new Car("Volkswagen", "Passat", "7399$");
$Peugeot  = new Car("Peugeot","5008", "5500$");
$Opel  = new Car("Opel","Astra", "2500$");
?>

</body>
</html>
