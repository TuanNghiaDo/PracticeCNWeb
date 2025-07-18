<?php
class Room
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }
}
