<?php

class Post
{
    private int $id = 0;
    private int $likes = 0;
    private array $comments = [];
    private string $author = 'indefinido';

    public function setAuthor(string $author): void
    {
        $this->author = $author;
        return;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}

$post = new Post();
$post->setAuthor('Matheus Brugge Milczwski');
echo $post->getAuthor();