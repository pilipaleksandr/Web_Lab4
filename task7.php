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


$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// Перевірка, чи обидва об'єкти вказують на один і той же екземпляр
if ($singleton1 === $singleton2) {
    echo "Обидва об'єкти вказують на один і той самий екземпляр Singleton<br>";
}


echo "Дані: " . $singleton1->getData() . "<br>";
echo "Дані: " . $singleton2->getData() . "<br>";
?>