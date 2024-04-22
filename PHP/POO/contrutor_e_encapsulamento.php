<?php 
class Post {
    private int $id;
    private int $likes;
    private int $comments;
    private string $author;

    public function __construct($likes = 0, $comments = 0, $author = 'desconhecido') {
        $this->likes = $likes;
        $this->comments = $comments;
        $this->author = $author;
    }

    public function setId($value) {
        if($value >= 1) {
            $this->id = $value;
        }
    }

    public function getId() {
        return $this->id ?? 1;
    }

    public function apresentation() {
        echo "The first post have a " .$this->likes ." likes, ".$this->comments ." comments and  written for '" .$this->author ."'<br><br>";
    }

}

$post1 = new Post(285, 87, 'Pablo Escobar');
$post1->setId(0);
$post1->apresentation();
echo "The first post id is: " .$post1->getId();
