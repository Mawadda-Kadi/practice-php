4. Create a Person class with properties for name and age, and a method to display the person's information.

<?php

class Person
{

    public function __construct(
        public string $name,
        public int|string $age
    ) {}

    public function displayInfo(): void
    {
        echo "<br>Name: " . $this->name . "<br>Age: " . $this->age . "<br>";
    }
}

$user = new Person("Sarah", 35);
$user->displayInfo();

?>

5. Create an array of your favorite movies and display them.

<?php

$movies = ["The Mentalist", "CSI", "Friends", "Arcane"];

foreach ($movies as $movie) {
    echo "<br>" . $movie . "<br>";
}

?>

6. Write a class hierarchy where a Dog class inherits from an Animal class and overrides the speak method.

<?php

class Animal {

    public function __construct(
        public string $name
    ) {}

    public function speak(): void {
        echo $this->name . " speaks<br>";
    }
}


class Dog extends Animal {

    public function __construct(
        public string $name,
        public string $breed
    ) {
        parent::__construct($name); // Call the parent class constructor
    }

    public function speak(): void {
        echo "<br>" . $this->name . " barks<br>";
    }
}

$myDog = new Dog("blackie", "Chihuahua");
$myDog->speak();

?>

7. Create a script that calculates the average of an array of numbers.

<?php

$numbers = [10, 20, 30, 40, 50];

$average = array_sum($numbers) / count($numbers);

echo "<br>" . $average . "<br>";

?>