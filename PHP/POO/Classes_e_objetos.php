<?php 
class Post {
    protected $teste;
    private $id;
    public int $likes;
    public array $comments = array();
    public string $author;
    public string $color;
    public bool $isSlider;
    public int $qtdItn = 1;

    public function moreLike() {
        $this -> likes++;
    }

}

$post1 = new Post();
$post1 -> likes = 3;
echo "LIKE POST1: " .$post1->likes ."<br>";
$post1 -> moreLike();


$post2 = new Post();
$post2 -> likes = 5;


