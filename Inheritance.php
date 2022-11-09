Inheritance
When a class is defined by inheriting the existing function of a parent class then it is called inheritance. Here child class will inherit all or a few member functions and variables of a parent class. We can define an inherited class by using the extends keyword.

Inheritance has three types Single, Multiple and Multilevel Inheritance but PHP only supports single inheritance, where only one class can be derived from a single parent class.



Example:

<?php
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
?>
Output:

example of inheritance in php


Final Keyword
The final keyword can be used to prevent method overriding or to prevent class inheritance.

Example:

<?php
final class Employee
{
    // some code
}
// This will result in error as the final keyword is used
class human extends Employee
{
    // some code
}
?>