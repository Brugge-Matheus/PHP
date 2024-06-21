<?php 
function flash(string $key, string $message, string $type = 'danger') {
    
    if(!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<span class='{$type}'>" .$message. "</span>";
    }
}

function getMessage($key) {
    $message = null;
    
    if(isset($_SESSION['flash'][$key])) {

        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }

}