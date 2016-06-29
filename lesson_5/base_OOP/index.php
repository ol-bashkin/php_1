<?php

require_once("Employer.php");
require_once("Clerk.php");
require_once("Manager.php");

$clerk = new Clerk();

var_dump($clerk->getType());
var_dump($clerk->getShedule());

$manager = new Manager();

var_dump($manager->getType());
var_dump($manager->getShedule());
