<?php

namespace Salary;

class FixedSalary implements SalaryInterface
{
    private $salary;

    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    public function computeSalary()
    {
        return $this->salary;
    }
}
