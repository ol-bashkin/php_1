<?php
class Person
{
    public $name = 'NameByDefault';
}

$person1 = new Person();
$person1 -> name = 'Alex';

$person2 = new Person();

var_dump($person1, $person2);
