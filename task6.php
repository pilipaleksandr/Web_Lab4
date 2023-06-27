<?php
// Батьківський клас
class Animal {
    protected $name;

    // Конструктор
    public function __construct($name) {
        $this->name = $name;
    }

    // Метод
    public function speak() {
        echo "Я тварина i моє ім'я - " . $this->name . "<br>";
    }
}

// Наслідуваний клас (нащадок)
class Dog extends Animal {
    // Перевизначений метод
    public function speak() {
        echo "Я собака i моє ім'я - " . $this->name . "<br>";
    }
}

// Створення об'єкту класу Animal
$animal = new Animal("Тварина");
$animal->speak();

// Створення об'єкту класу Dog
$dog = new Dog("Бобік");
$dog->speak();
?>