<?php
class Entity
{
    protected $entityName;
    
    public function __construct($name, $width)
    {
        $this->entityName = $name;
        $this->width = $width;
    }
    
    public function getName()
    {
        return $this->entityName;
    }
    
    public function getWidth()
    {
        return $this->width;
    }
}


$e = new Entity('Eee', '100');


echo '1' . $e->getName();
