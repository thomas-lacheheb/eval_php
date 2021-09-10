<?php

class Category {
    private $id;
    private $name;

    public function __construct()
    {

    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
        return $this;
    }
}