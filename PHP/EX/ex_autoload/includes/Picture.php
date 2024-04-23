<?php 
namespace includes;

class Post {
    private int $likes;
    private int $numComments;

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
    private string $urlImg;

    public function __construct($setLikes, $setNumComments, $urlImg) {
        $this->setLikes($setLikes);
        $this->setNumComments($setNumComments);
        $this->setUrlImg($urlImg);
    }

    public function setUrlImg(string $u) {
        if(filter_var($u, FILTER_VALIDATE_URL)) {
            $this->urlImg = "<strong>" .$u. "</strong>";
        }
    }

    public function getUrlImg() {
        return $this->urlImg ?? '<strong>Url inválida</strong>';
    }
}

class Video extends Post {
    private string $urlVideo;

    public function __construct($setLikes, $setNumComments, $urlVideo) {
        $this->setLikes($setLikes);
        $this->setNumComments($setNumComments);
        $this->setUrlVideo($urlVideo);
    }

    public function setUrlVideo($u) {
        if(filter_var($u, FILTER_VALIDATE_URL)) {
            $this->urlVideo = "<strong>" .$u. "</strong>";
        }
    }

    public function getUrlVideo() {
        return $this->urlVideo ?? '<strong>Url inválida</strong>';
    }
}
