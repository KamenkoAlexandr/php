<?php

require_once 'autoload.php';

use Employee\Designer;
use Employee\FrontDev;
use Employee\MidDev;
use Employee\SeniorDev;
use Salary\FixedSalary;
use Salary\HourSalary;

$team = new Team('X');
$team->addEmployee(new Designer('Designer'), new FixedSalary(3000))
     ->addEmployee(new SeniorDev('Senior'), new HourSalary(60, 10))
     ->addEmployee(new MidDev('Middle 1'), new FixedSalary(1000))
     ->addEmployee(new MidDev('Middle 2'), new FixedSalary(1000))
     ->addEmployee(new FrontDev('Front'), new HourSalary(120, 5));

echo '<h1 style="text-align: center">Result: ',$team->computeSalary(),'</h1>';
