<?php

class Beverages
{
    protected $name;
    protected $color;
    protected $price;
    protected $temperature;
    protected $alcohol;

    public function __construct($name, $color, $price, $alcohol, $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->alcohol = $alcohol;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return "This " . $this->name . " is " . $this->temperature . " and " . $this->color . " and contains " . $this->alcohol . " alcohol and costs " . $this->price . "$.";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAlcohol()
    {
        return $this->alcohol;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Duvel extends Beverages
{
    public function __construct($name, $color, $price, $alcohol, $temperature = "cold")
    {
        parent::__construct($name, $color, $price, $alcohol, $temperature);
    }

    public function beerInfo()
    {
        return "Hi, I'm " . $this->getName() . " and have an alcohol percentage of " . $this->getAlcohol() . " and I have a " . $this->getColor() . " color.";
    }

    public function getInfo()
    {
        return $this->beerInfo() . " " . parent::getInfo();
    }
}

class Soft extends Beverages
{
    private $sugar;

    public function __construct($name, $color, $price, $alcohol, $sugar, $temperature = "cold")
    {
        parent::__construct($name, $color, $price, $alcohol, $temperature);
        $this->sugar = $sugar;
    }

    public function getInfo()
    {
        return parent::getInfo() . " It also contains " . $this->sugar . " grams of sugar.";
    }
}