<?php

namespace Salary;

class HourSalary implements SalaryInterface
{
    private $hours;
    private $rate;

    public function __construct($workHours, $rate)
    {
        $this->hours = $workHours;
        $this->rate = $rate;
    }

    public function computeSalary()
    {
        return $this->rate * $this->hours;
    }
}