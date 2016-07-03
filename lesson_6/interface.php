<?php

interface IUser
{
    public function getUserName();
    public function getAge();
    public function getRating();
}

class Administrator implements IUser
{
    public function getUserName() {
    
    };
    public function getAge() {
        
    };
    public function getRating() {
        
    };
}