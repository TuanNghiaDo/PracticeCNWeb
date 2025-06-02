<?php
class Student
{
    private $id;
    private $name;
    private $class;
    private $grade;

    public function __construct($id, $name, $class, $grade)
    {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->grade = $grade;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getClass()
    {
        return $this->class;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getGrade()
    {
        return $this->grade;
    }
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }
}
