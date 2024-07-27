<?php

class Post
{
    private int $id;
    private int $likes;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setLikes($likes): void
    {
        $this->likes = $likes;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }
}

class Text extends Post
{
    private string $author;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}

$post = new Text(2);
$post->setLikes(200);
$post->setAuthor('Kleber');

echo "ID:" . $post->getId() . PHP_EOL;
echo "Likes" . $post->getLikes() . PHP_EOL;
echo "Author" . $post->getAuthor() . PHP_EOL;
