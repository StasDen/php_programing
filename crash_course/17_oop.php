<?php

class User
{
    // Class properties
    public string $name;
    public string $surname;
    private string $password;  // Note: using "private" access modifier - var is not reachable outside the class

    // Creating class constructor
    public function __construct($name, $surname, $password)
    {
        $this->name = $name;  // Code explanation: this obj name property equals set property
        $this->surname = $surname;
        $this->password = $password;
    }

    // Creating name setter
    public function set_name($name): void
    {
        $this->name = $name;
    }

    // Creating name getter
    public function get_name(): string
    {
        return $this->name;
    }
}

$user3 = new User("John", "Doe", "12121");
var_dump($user3);

// Printing obj name manually and using getter
echo $user3->name;
echo $user3->get_name();

// Using class inheritance
class Employee extends User
{
    public string $title;

    public function __construct($name, $surname, $password, $title)
    {
        parent::__construct($name, $surname, $password);  // Using parent constructor(works like "super" in Java)
        $this->title = $title;
    }

    public function get_title(): string
    {
        return $this->title;
    }
}

$employee = new Employee("Sara", "Smith", "1111", "manager");
var_dump($employee);
echo $employee->get_title();
