<?php
/* S -> Single Responsibility Principe (Princípio da Responsabilidade Única)
   - Dita que cada classe deve assumir apenas uma responsabilidade
*/

// Não segue o princípio
class Usuarioo {
    public function setNome() {}
    public function getNome() {}

    public function add() {}
    public function update() {}
    public function delete() {}
}


// Segue o princípio
class Usuario {

    public function setNome() {}
    public function getNome() {}

}

class UsuarioDB {
    public function add(Usuario $user) {}
    public function update(Usuario $user) {}
    public function delete() {} 
}



/* Problemas de violar o princípio
    - Falta de coesão
    - Auto acoplamento (EX: todas as info sobre o usuario junto no mesmo item)
    - 


*/
