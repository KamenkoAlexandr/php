<?php

namespace Employee;

use Salary\Salary;
use Salary\SalaryInterface;

abstract class Employee
{
    protected $name;
    public $salaryStrategy;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param SalaryInterface $salary
     */
    public function setSalaryStrategy(SalaryInterface $salary)
    {
        $this->salaryStrategy = $salary;
    }}
