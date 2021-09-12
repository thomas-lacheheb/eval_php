<?php

class Post
{
    private $id;
    private $name;
    private $description;
    private $createdAt;
    private $category_id;

    public function __construct()
    {
        $this->createdAt = new DateTime();
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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($newDescription)
    {
        $this->description = $newDescription;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function setCategoryId($newCategoryId)
    {
        $this->category_id = $newCategoryId;
        return $this;
    }
}