<?php
class Singleton {
    private static $instance;
    private $data;

    private function __construct() {
        $this->data = "Дані одиночки";
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getData() {
        return $this->data;
    }
}

// Використання Singleton

// Спроба створення нового об'єкту через конструктор заборонена
// $singleton = new Singleton(); // Помилка: Constructor Singleton::__construct() is private

// Отримання єдиного екземпляру Singleton
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// Перевірка, чи обидва об'єкти вказують на один і той же екземпляр
if ($singleton1 === $singleton2) {
    echo "Обидва об'єкти вказують на один і той самий екземпляр Singleton<br>";
}

// Виведення даних Singleton
echo "Дані: " . $singleton1->getData() . "<br>";
echo "Дані: " . $singleton2->getData() . "<br>";
?>