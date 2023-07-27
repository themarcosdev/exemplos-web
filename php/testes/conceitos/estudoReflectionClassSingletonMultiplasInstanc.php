<?php
    /* --- ARQUIVO DE TESTES / ESTUDOS --- */  
  
    /**
     * Instances | Singleton  | ReflectionClass ;
     * Mantendo uma única instância durante a execução da classe, só existirá um $nome ; ex : [Jose] ;
     * A propiedade $instancias guarda todas as instâncias criadas até agora ;
     * @param [string] $nome Nome da pessoa instânciada
     */
    class Pessoa {
        private static $instancias = array();
        private $nome;
        private $momentoDeCriacao;
        private $momentoDeEncerramento;

        /* Construtor privado */
        private function __construct($nome) {
            $this->nome = $nome;
            $this->momentoDeCriacao = date('Y-m-d H:i:s');
        }
        
        /*Usar getInstance para criar uma nova instância */
        public static function getInstance($nome) {
            if (!isset(self::$instancias[$nome])) {
                self::$instancias[$nome] = new Pessoa($nome);
            }
            return self::$instancias[$nome];
        }

        public function getNomeENascimento() {
            return $this->nome . ' - Nascido em: ' . $this->momentoDeCriacao;
        }

        public function __destruct() {
            $this->momentoDeEncerramento = date('Y-m-d H:i:s');
            // Exibido no final da execução da página ;
            echo "<br>". $this->nome . " morreu em : ". $this->momentoDeEncerramento . "<br>";
        }
    }

    // Criando as instâncias usando o método getInstance
    $agora = date('s');
    $teste = 1 ;

    while (1 == $teste ) {
        $pessoa1 = Pessoa::getInstance("Pedro");

        /* Aguardar + 2 segundos e alterar teste para finalizar o [while] */
        if ($agora + 2 < date('s')) {
            $pessoa2 = Pessoa::getInstance("Paulo");
            $pessoa3 = Pessoa::getInstance("Jose");
            $teste = 2 ;
        }
        $pessoa4 = Pessoa::getInstance("Jose");
    }

    // Acessando as instâncias
    echo $pessoa1->getNomeENascimento();
    echo "<br>";
    echo $pessoa2->getNomeENascimento();
    echo "<br>";
    echo $pessoa3->getNomeENascimento();
    echo "<br>";
    echo $pessoa4->getNomeENascimento();
    echo "<br>";

    /** Jose [propiedade nome] é único, mesmo que tente re-declarar sempre será o mesmo
     *  pq já existe instância (SINGLETON) */
    echo "<br>";
    print_r($pessoa3);
    echo "<br>";
    print_r($pessoa4);
    echo "<br>";
    echo "<br>";

    /* --- Usando ReflectionClass --- */
    /* Analisando a classe Pessoa */
    $reflexao = new ReflectionClass('Pessoa');
    $comentario = $reflexao->getDocComment();

    echo ($comentario) . "<br>";

    /* OBS : 
            - estudar outros casos de uso do Ref.Class, como criação de classe sem construtor
    */

    echo "<br><b>Variavíes :</b> <br>";
    $propriedades = $reflexao->getProperties();
    foreach ($propriedades as $propriedade) {
        echo $propriedade->getName() .  "<br>";
    }

    echo "<br>";
    echo "<b>Métodos :</b> <br>";
    $metodos = $reflexao->getMethods();
    foreach ($metodos as $metodo) {
        echo $metodo->getName() . "<br>";
    }

    /** Acessando nome Pessoa 1 */
    $reflectionClass = new ReflectionClass('Pessoa');
    $reflectionNome = $reflectionClass->getProperty('nome');
    $reflectionNome->setAccessible(true);
    $nomePessoa1 = $reflectionNome->getValue($pessoa1);

    /** Acessando todas as instâncias */
    $reflectionIntances = $reflectionClass->getProperty('instancias');
    $reflectionIntances->setAccessible(true);
    $IntancesPessoa1 = $reflectionIntances->getValue($pessoa1);

    /** É possível acessar $pessoa1->nome desta forma (privado)  */
    echo "<br> Acessando ".'$pessoa1'. ", o nome é : ". $nomePessoa1 . "<br>";

    echo "<br> Acessanto todas as intâncias: <br>" ;
    echo "<pre>";
    print_r($IntancesPessoa1) ;
    echo "</pre>";
    echo "<br>";

    /** NÃO é possível acessar $pessoa1->nome desta forma (privado) */
    echo $pessoa1->nome;
