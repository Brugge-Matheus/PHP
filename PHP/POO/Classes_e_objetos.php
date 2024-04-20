<?php 
class Post {
    protected $test;
    private $id;
    public int $likes;
    public array $comments = array();
    public string $author;
    public string $color;
    public bool $isSlider;
    public int $qtdItn = 1;

    public function __construct($likes = 0, $comments = array('0')) {
        $this->likes = $likes;
        $this->comments = $comments;
    }

    public function moreLike() {
        $this -> likes++;
    }

}

$post1 = new Post();
echo "LIKE POST1: " .$post1->likes ."<br>";


$post2 = new Post();

