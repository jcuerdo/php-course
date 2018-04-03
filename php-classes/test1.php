<?php


class Person
{
    private $name;
    private $dni;
    private $age;

    public function __construct($name = null, $dni = null, $age = null)
    {
        //To do
    }

    public function getName()
    {
        //To do
    }

    public function setName($name)
    {
        //To do
    }

    public function getDni()
    {
        //To do
    }

    public function setDni($dni)
    {
        //To do
    }

    public function getAge()
    {
        //To do
    }

    public function setAge($age)
    {
        //To do
    }
}

class Agenda
{
    private $persons;

    public function __construct(array $persons = [])
    {
        $this->persons = $persons;
    }

    public function addPerson(Person $person)
    {
        //To do
    }

    public function addNewPerson($name, $dni, $age)
    {
        //To do
    }

    public function deletePerson(Person $person)
    {
        //To do
    }

    public function deletePersonByDni($dni)
    {
        //To do
    }

    public function searchPersonByDni($dni)
    {
        //To do
    }

    public function searchPersonsByName($name)
    {
        //To do
    }

    public function getAllPersonByAge()
    {
        //To do order
    }
}

$agenda = new Agenda();

$agenda->addNewPerson('Pepe', '1111', 22);
$agenda->addPerson(new Person('Manolo', '2222', 24));
$agenda->addPerson(new Person('Manolo', '3333', 19));

$person = new Person();
$person->setName('Jose');
$person->setDni('4444');
$person->setAge(44);

$agenda->addPerson($person);


$resultPerson = $agenda->searchPersonByDni('4444');
$resultPerson->setAge(99);


//Should be 99
echo $person->getAge();


$resultPerson = $agenda->searchPersonByDni('4444');
$resultPerson->setAge(99);

$all = $agenda->getAllPersonByAge();

//Should print 4 records with all the data fullfilled
foreach ($all as $person) {
    echo 'Name: ' . $person->getName() . ' DNI: ' . $person->getDni() . ' Age: ' . $person->getAge();
}


/** Complete the classes code */
