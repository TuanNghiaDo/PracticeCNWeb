<?php
class Book
{
    private $id;
    private $name;
    private $author;
    private $publisher;
    private $category;
    private $price;

    public function __construct($id, $name, $author, $publisher, $category, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->category = $category;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
