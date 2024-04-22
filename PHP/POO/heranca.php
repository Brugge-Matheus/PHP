<?php 
class Post {
    private int $id;
    private int $likes;

    protected function setId($i) {
        $this->id = $i;
    }

    public function getId() {
        return $this->id;
    }

    protected function setLikes($i) {
        $this->likes = $i;
    }

    public function getLikes() {
        return $this->likes;
    }
}

class Foto extends Post {
    private string $url;

    public function __construct($id = 1) {
        $this->setId($id);
        $this->setLikes(380);
    }

    public function setUrl($i) {
        if(filter_var($i, FILTER_VALIDATE_URL)) {
            $this->url = $i;

        }
    }

    public function getUrl() {
        return $this->url ?? 'Is not a URL';
    }
}

class Texto extends Post {
    private string $tittle;
    private string $body;

    public function setTittle($i) {
        $this->tittle = $i;
    }

    public function getTittle() {
        return $this->tittle;
    }

    public function setBody($i) {
        $this->body = $i;
    }

    public function getBody() {
        return $this->body;
    }


}

$foto1 = new Foto();
$texto1 = new Texto();
$foto1->setUrl('https://www.youtube.com/');
// $foto1->setUrl('If you want yes bro');

echo "- Id: ".$foto1->getId()."<br>- Likes: ".$foto1->getLikes()."<br>- url: ".$foto1->getUrl();