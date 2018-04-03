<?php

class Animal
{
    //To do
}

class Dog extends Animal
{
    //Nothing more to do in this class

    public function bark()
    {
        echo 'GUAUUU';
    }

}

class Bird extends Animal
{
    //Nothing more to do in this class

    public function fly()
    {
        echo "I'm flying";
    }
}

class GoldenEagle extends Bird
{
   //To do
}

class Duck extends Bird
{
    //To do
}

$duck = new Duck();

$duck->fly();
$duck->squawk();
$duck->walk();

//Should not work
$duck->huntFlying();

//Should not work
$duck->bark();

$goldenEagle = new GoldenEagle();
$goldenEagle->fly();
$goldenEagle->huntFlying();
$goldenEagle->walk();

//Should not work
$goldenEagle->squawk();

//Should not work
$goldenEagle->bark();

$bird = new Bird();
$bird->fly();
$bird->walk();

//Should not work
$bird->huntFlying();
//Should not work
$goldenEagle->bark();


$dog = new Dog();
$dog->walk();


/** Complete the classes code */
