<?php
// Namespace
namespace MyApp;


trait ShapeCalculations 
{
    public function calculateArea() //luas
    {
        
    }

    public function calculatePerimeter() //keliling
    {

    }
}


abstract class Shape
{
    protected $name;
    protected $color;

    abstract public function getDescription(): string;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}


class Circle extends Shape
{
    use ShapeCalculations;

    protected $radius;

    public function __construct($name, $color, $radius)
    {
        parent::__construct($name, $color);
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getDescription(): string
    {
        return "Ini adalah {$this->getName()} berwarna {$this->getColor()} dengan jari-jari {$this->getRadius()}.";
    }

    public function calculateArea(): float //luas
    {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter(): float //keliling
    {
        return 2 * pi() * $this->radius;
    }
}


class Rectangle extends Shape
{
    use ShapeCalculations;

    protected $width;
    protected $height;

    public function __construct($name, $color, $width, $height)
    {
        parent::__construct($name, $color);
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getDescription(): string
    {
        return "Ini adalah {$this->getName()} berwarna {$this->getColor()} dengan lebar {$this->getWidth()} dan tinggi {$this->getHeight()}.";
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }
}

// Contoh penggunaan
$circle = new Circle('Lingkaran', 'biru', 28);
echo $circle->getDescription() . "\n";
echo 'Luas: ' . $circle->calculateArea() . "\n";
echo 'Keliling: ' . $circle->calculatePerimeter() . "\n";

$rectangle = new Rectangle('Persegi Panjang', 'kuning', 5, 10);
echo $rectangle->getDescription() . "\n";
echo 'Luas: ' . $rectangle->calculateArea() . "\n";
echo 'Keliling: ' . $rectangle->calculatePerimeter() . "\n";

?>
