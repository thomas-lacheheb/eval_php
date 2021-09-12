<?php

class Comment
{
    private $id;
    private $description;
    private $id_article;

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

    public function setArticleId(int $id) : self
    {
        $this->id_article = $id;
        return $this;
    }
    public function getArticleId() : int
    {
        return $this->id_article;
    }

}