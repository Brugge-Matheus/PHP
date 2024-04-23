<?php 

interface PostExample {
    public function setLikes($i);  
    public function getLikes(); 
    public function setNumComments($i); 
    public function getNumComments(); 
}

class Post implements PostExample {
    protected int $likes;
    protected int $numComments;

    public function setLikes($i) {
        if($i >= 1) {
            $this->likes = $i;
        }
    }

    public function getLikes() {
        return $this->likes ?? 1;
    }

    public function setNumComments($i) {
        if($i >= 1) {
            $this->numComments = $i;
        }
    }

    public function getNumComments() {
        return $this->numComments ?? 0;
    }
}

class Picture extends Post {
    private string $url;

    public function setUrl(string $u) {
        if(filter_var($u, FILTER_VALIDATE_URL)) {
            $this->url = $u;
        }
    }

    public function getUrl() {
        return $this->url ?? 'Url inválida';
    }
}
