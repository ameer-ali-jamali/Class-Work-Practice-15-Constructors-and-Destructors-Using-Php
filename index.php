Constructors and Destructors
Constructor
In PHP, a constructor allows you to initialize an object's properties upon the creation of the object. The constructor function starts with two underscores (__) and if we create a __construct() function, then PHP will automatically call this function when we create an object from a class.

Example:

<?php
class Employeee
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
$emp1 = new Employeee("Lovish");
echo $emp1->get_name();
?>
Output:

Lovish


Destructor
Destructor is a special member function which is exactly the reverse of the constructor method. When it is called an instance of the class is deleted from the memory. The Destructor function starts with two underscores (__) and if we create a __destruct() function, then PHP will automatically call this function at the end of the script.

Example:

<?php
class Employee
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

$emp1 = new Employee("Izhaan");
?>
Output:

Employee name is Izhaan.