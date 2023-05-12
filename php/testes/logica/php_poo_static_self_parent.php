<?php
// self vs static e conceito de parent em POO com PHP ;
// Referencia : https://stackoverflow.com/a/11710168
class Foo
{
  protected static $foo = "abc";
	public static $bar = 1234;
	public static function a()
	{
		echo 'static : ' . static::$bar;
		echo "\n";
		echo 'self : ' . self::$bar;
		echo "\n";
// 		echo 'parent : ' . parent::$bar;
	}
}

class Bar extends Foo
{
	public static $bar = 4321;
// 	public static function a()
// 	{
// 		echo 'static : ' . static::$bar;
// 		echo "\n";
// 		echo 'self : ' . self::$bar;
// 		echo "\n";
// 		echo 'parent : ' . parent::$bar;
// 	}

    // public static function a()
    // {
    //     echo "funcao a() chamada";
    // }
}
(new Bar())->a();

// echo Foo::$bar;

// echo Foo::$foo;


/** Explicando um pouco sobre POO e brincando com o código **/
/* Explicando self - static - parent , um pouco sobre polimorfismo e herança */
/*
    -- Cenário 1  :
    Temos uma classe pai chamada Foo e uma filha chamada Bar (Bar é uma extensão de Foo),
    Bar não possui a funcao a() (está comentada), porém ele consegue acessar o método público do pai (Herança) .
    Foo não extende ninguem então a linha 14 está comentada :  "echo 'parent : ' . parent::$bar;" não existe um pai para o Foo ;
    a variavel $bar em Foo = 1234 e em Bar é 4321 ;
    
    Quando é instanciado um novo filho através de IIFE
    Acessando (new Bar())->a() :
    o self $bar é o do Pai,
    o static $bar é o Filho 
    
    # Testando : 
    Execute o código descomentando a linha 14 e terá um erro,
    Execute o código com a linha 14 comentada e veja o filho acessando o método do Pai ;
    
    
    -- Cenário 2 : 
    Descomente as linhas 21 a 28  (e mantenha as demais) : 
    Através de polimorfismo a funcao a() de Foo e Sobrescrita pela funcao a() de Bar ;
    $bar Self e static se referem ao Filho (Bar)
    $bar parent é referente ao Pai ;

    # Testando : 
    Execute o código e veja o que foi descrito no Cenário 2 ;
    
    -- Cenário 3 :
    Analisando variávies :
    Parte 1 da analise :
    Comente a linha 35 e descomente a 37 ;
    É possível acessar Foo:$bar sem instanciar a classe, devido a ser uma variavel pública e static ;
    
    # Testando : 
    Execute o código e veja o que foi descrito no Cenário 3 na parte 1 ;
    
    Parte 2 da analise :
    Mantenha a linha 35 e 37 comentadas e descomente a 39 : 
    Exibirá um erro devido $foo ser uma variavel protegida (o mesmo se aplica a privada)

    # Testando : 
    Execute o código e veja o que foi descrito no Cenário 3 na parte 2 ;
    
    
*/

