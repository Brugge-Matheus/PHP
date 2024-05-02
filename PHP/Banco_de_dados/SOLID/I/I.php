<?php
/* I -> Interface Segregation Principle (Princípio da Segregação de Interface)
   - Em uma interface ira ter somente os métodos essênciais e que serão utilzados por todas as classes

   - 
*/

// Não segue o princípio
interface Aves {
    public function setLocation($lat, $lon);
    public function setAltitude($alt);
    public function render();
}

class Papagaio implements Aves {
    public function setLocation($lat, $lon) {

    }

    public function setAltitude($alt) {

    }

    public function render() {

    }
}

class Pinguin implements Aves {
    public function setLocation($lat, $lon) {

    }

    public function setAltitude($alt) {

    }

    public function render() {

    }
}

// Segue o princípio
interface AvesQueNãoVoam {
    public function setLocation($lat, $lon);
    public function render();
}

interface AvesQueVoam extends AvesQueNãoVoam {
    public function setLocation($lat, $lon);
    public function setAltitude($alt);
    public function render();
}

class NewPapagaio implements AvesQueVoam {
    public function setLocation($lat, $lon) {

    }

    public function setAltitude($alt) {

    }

    public function render() {

    }
}

class NewPinguin implements AvesQueNãoVoam {
    public function setLocation($lat, $lon) {

    }

    public function render() {

    }
}



/* Problemas de violar o princípio
    - Acoplamento Indesejado
    - Dificuldade de Extensão
    - Poluição de Namespace
    - Interfaces Monolíticas (isso pode levar a classes que precisam implementar métodos desnecessários, resultando em um código inchado e difícil de manter.)

*/
