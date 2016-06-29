<?php

class Manager extends Employer
{
    public $workFrom = '10:00';
    public $workTill = '18:00';
    
    public function getType()
    {
        return 'Manager';
    }
}
