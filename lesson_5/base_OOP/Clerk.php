<?php

class Clerk extends Employer
{
    public $workFrom = '10:00';
    public $workTill = '19:00';
    
    public function getType()
    {
        return 'Clerk';
    }
}
