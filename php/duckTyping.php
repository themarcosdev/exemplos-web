<?php 
/**
 * --- DUCK TYPING ---  *
*/
class ClasseA {
    public function executar() {
        // Implementação do método executar da ClasseA
        return "\nA";
    }
}

class ClasseB {
    public function executar() {
        // Implementação do método executar da ClasseB
        return "\nB";
    }
}

class ClasseC {
    public function testar() {
        // Implementação do método testar da ClasseC
        return "\nC";
    }
}

function executarTarefa($objeto) {
    try {
        if (method_exists($objeto, 'executar')) {
            return $objeto->executar();
        } else {
            throw new Exception('Método executar não encontrado na classe ' . get_class($objeto));
        }
    } catch (Exception $e) {
        return "\nFalha : ".explode("Stack", $e)[0];
    }
}

$objetoA = new ClasseA();
$objetoB = new ClasseB();
$objetoC = new ClasseC();

echo executarTarefa($objetoA); // Executa o método executar da ClasseA
echo executarTarefa($objetoB); // Executa o método executar da ClasseB
echo executarTarefa($objetoC); // Executa o método executar da ClasseC (inexistente)
