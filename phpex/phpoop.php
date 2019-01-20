<html>
<head>
    <title><?php echo "PHP Object Oriented Programming"; ?></title>
</head>
<body>

<?php

class Animal implements Singable {
    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;

    public static $number_of_animals = 0;

    const PI = "3.14159";

    function getName(){
        return $this->name;
    }

    function __construct()
    {
        $this->id = rand(100, 1000000);

        echo $this->id. "has been assigned <br />";

        Animal::$number_of_animals++;
    }

    public function __destruct()
    {
        echo $this->name. "is being destroyed :(";
    }

    function __get($name)
    {
        echo "Asked for ". $name ."<br />";

        return $this->$name;
    }

    function __set($name, $value)
    {
        switch ($name){
            case "name":
                $this->name = $value;
                break;

            case "favorite_food":
                $this->favorite_food = $value;
                break;

            case "sound":
                $this->sound = $value;
                break;

            default:
                echo $name. "Not found.";
        }

        echo "Set". $name ."To". $value ."<br />";
    }

    function run(){
        echo $this->name. "runs <br />";
    }

    final function what_is_good(){
        echo "Running is good <br />";
    }

    function __toString()
    {
        return $this->name. "Says" . $this->sound . "give me some " . $this->favorite_food . ". My id is " . $this->id . ". Totals animals = " . Animal::$number_of_animals . "<br /><br />";
    }

    function sing()
    {
        echo $this->name . "Sings 'Bow wooow Woow'";
    }

    static function add_these($num1, $num2){
        return ($num1 + $num2) . "<br />";
    }
}

class Dog extends Animal implements Singable {
    function run(){
        echo $this->name. "runs like crazy<br />";
    }

    function sing()
    {
        echo $this->name . "Sings 'Grrrr grrr grrr grrr'";
    }
}

interface Singable{
    public function sing();
}

$animal_one = new Animal();
$animal_one->name = "Spot";
$animal_one->favorite_food = "Meat";
$animal_one->sound = "Ruff";


$animal_two = new Dog();

$animal_two->name = "Grover";
$animal_two->favorite_food = "Mushrooms";
$animal_two->sound = "Grrrr";

echo $animal_two->name. "Says" . $animal_two->sound . " give me some " . $animal_two->favorite_food . ". My id is " . $animal_two->id . ". Totals animals = " . Dog::$number_of_animals . "<br /><br />";

echo "Favorite number " . Animal::PI . "<br />";

$animal_one->run();
$animal_two->run();

echo $animal_one;

$animal_one->sing();

function make_them_sing(Singable $singing_animal){
    $singing_animal->sing();
}

make_them_sing($animal_one);
make_them_sing($animal_two);

echo "<br />";

function sing_animal(Animal $singing_animal){
    $singing_animal->sing();
}

sing_animal($animal_one);
sing_animal($animal_one);

echo "<br />";

echo "3+5= " . Animal::add_these(3, 5);

$is_it_an_animal = ($animal_two instanceof Animal) ? "True" : "False";

echo "It is " . $is_it_an_animal . 'that $animal_two is an Animal <br />';

$animal_clone = clone $animal_one;

?>

</body>
</html>