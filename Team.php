<?php

use Employee\Employee;
use Salary\Salary;
use Salary\SalaryInterface;

class Team implements SalaryInterface
{
    private $employees = [];
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param Employee $employee
     * @param SalaryInterface $salary
     * @return $this
     */
    public function addEmployee(Employee $employee, SalaryInterface $salary)
    {
        $employee->setSalaryStrategy($salary);
        $this->employees[] = $employee;

        return $this;
    }

    public function computeSalary()
    {
        $result = 0;
        foreach ($this->employees as $employee) {
            $result += $employee->salaryStrategy->computeSalary();
        }

        return $result;
    }
}
