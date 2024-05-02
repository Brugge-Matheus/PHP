<?php 
// HASH
$passwd = '12345';

$hash = password_hash($passwd, PASSWORD_DEFAULT);
// $hash = password_hash($passwd, PASSWORD_BCRYPT);

echo "Senha original: " .$passwd ."\n" . "Hash: " .$hash ."\n\n"; 

if(password_verify($passwd, $hash)) {
    echo "Senha correta!";

} else {
    echo "Senha incorreta!!!";
}

//HASH MD5

$hashMD5 = md5($passwd);