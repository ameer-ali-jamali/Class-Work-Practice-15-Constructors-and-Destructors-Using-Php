<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Constructors and Destructors
    // Constructor
    // In PHP, a constructor allows you to initialize an object's properties upon the creation of the object. The constructor function starts with two underscores (__) and if we create a __construct() function, then PHP will automatically call this function when we create an object from a class. 

    // Example:

    class Employee
    {
        public $name;
        public $surname;

        function __construct($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }
    $emp1 = new Employee("amjad");
    echo $emp1->get_name();

    // Output:

    // Amjad


    // Destructor
    // Destructor is a special member function which is exactly the reverse of the constructor method. When it is called an instance of the class is deleted from the memory. The Destructor function starts with two underscores (__) and if we create a __destruct() function, then PHP will automatically call this function at the end of the script. 

    // Example:

    class Employe
    {
        public $name;

        function __construct($name)
        {
            $this->name = $name;
        }
        function __destruct()
        {
            echo "Employee name is {$this->name}.";
        }
    }

    $emp1 = new Employee("wassem");

    // Output:

    // Employee name is wassem.


    // Inheritance
    // When a class is defined by inheriting the existing function of a parent class then it is called inheritance. Here child class will inherit all or a few member functions and variables of a parent class. We can define an inherited class by using the extends keyword. 

    // Inheritance has three types Single, Multiple and Multilevel Inheritance but PHP only supports single inheritance, where only one class can be derived from a single parent class.



    // Example:

    class exm
    {
        public function func1()
        {
            echo "example of inheritance  ";
        }
    }
    class exm1 extends exm
    {
        public function func2()
        {
            echo "in php";
        }
    }
    $obj = new exm1();
    $obj->func1();
    $obj->func2();

    //        Output:

    //   example of inheritance in php


    // Final Keyword
    // The final keyword can be used to prevent method overriding or to prevent class inheritance. 

    // Example:

    final class Employeee
    {
        // some code
    }
    // This will result in error as the final keyword is used
    class human extends Employee
    {
        // some code
    }

    ?>
</body>

</html>