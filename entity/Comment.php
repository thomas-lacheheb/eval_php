<?php

class Comment
{
    private $id;
    private $description;
    private $id_post;

    public function getId() : int
    {
        return $this->id;
    }

    public function setDescription(string $d) : self
    {
        $this->description = $d;
        return $this;
    }
    public function getDescription() : string
    {
        return $this->description;
    }

    public function setPostId(int $id) : self
    {
        $this->id_post = $id;
        return $this;
    }
    public function getPostId() : int
    {
        return $this->id_post;
    }

}