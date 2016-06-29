<?php

class Employer
{
    
    public $name;
    
    protected $salary;
    
    public function getSalary()
    {
        return $this->salary;
    }
    
    public $workFrom = '9:00';
    public $workTill = '21:00';
    
    public function setShedule($from, $till)
    {
        $this->workFrom = $from;
        $this->workTill = $till;
    }
    
    public function getShedule()
    {
        return $this->name . ': my Shedule : from ' . $this->workFrom . ' till ' . $this->workTill . '<br>';
    }
}
