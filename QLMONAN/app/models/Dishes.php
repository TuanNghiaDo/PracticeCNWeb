<?php
class Dishes
{
    private $id;
    private $name;
    private $category;
    private $description;

    public function __construct($id, $name, $category, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
