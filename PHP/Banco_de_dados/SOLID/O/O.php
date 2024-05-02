<?php
/* O -> Open-Close Principle (Princípio aberto-fechado)
   - Objetos e entidades devem estar abertos a extensão e fechados a modificação
*/

// Não segue o princípio
class ContratoCLT {
    public function calcSalario() {}

}

class Estagio {
    public function bolsaAuxilio() {}
}

class ContratoPJ {
    public function calcSalario() {}
}

class FolhaPagamento {
        public function calc($funcionario) {
            $salario = 0;

            if($funcionario instanceof ContratoCLT) {
                $salario = $funcionario->calcSalario();

            } else if($funcionario instanceof Estagio) {
                $salario = $funcionario->bolsaAuxilio();

            } else if($funcionario instanceof ContratoPJ) {
                $salario = $funcionario->calcSalario();
            }

            return $salario;
        }
}



// Segue o princípio
interface Remuneravel {
    public function remuneracao();
}

class NewContratoCLT implements Remuneravel {
    public function remuneracao() {}
}

class NewContratoPJ implements Remuneravel{
    public function remuneracao() {}
}

class NewEstagio implements Remuneravel{
    public function remuneracao() {}
}

class NewFolhaPagamento {
    public function calcularSalario(Remuneravel $funcionario) {
        return $funcionario->remuneracao();
    }
}




/* Problemas de violar o princípio
    - Dificuldade de Manutenção
    - Baixa Reusabilidade
    - Acoplamento Elevado
    - Dificuldade de Escalabilidade
    - Dificuldade em Lidar com Mudanças Futuras

*/
