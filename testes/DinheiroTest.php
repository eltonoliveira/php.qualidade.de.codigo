<?php
require_once './config/autoload.php';

/**
* Classe de testes da classe Dinheiro
*
* @name       DinheiroTest
* @category   Testes
* @package    Moedas
* @subpackage Dinheiro
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class DinheiroTest extends PHPUnit_FrameWork_TestCase
{
	/**
	* O objetivo do teste é verificar se objetos Franco e Dollar são diferentes.
	*
	* @name   testVerificarSeOsObjetosFrancoEDollarSaoDiferentes
    * @access public
	* @return void
	*/
	public function testVerificarSeOsObjetosFrancoEDollarSaoDiferentes()
	{
		self::assertFalse(Dinheiro::franco(5)->equals(Dinheiro::dollar(5)));
	}

	/**
	* Provedor dos dados do teste testMultiplicarFrancoPorUmEscalar.
	*
	* @name   provedorDoTesteMultiplicarFrancoPorUmEscalar
	* @access public
	* @return array
	*/
	public function provedorDoTesteMultiplicarFrancoPorUmEscalar()
	{
		return [
			'5 francos vezes 2 e igual a 10 francos' => [5, 2, 10],
			'5 francos vezes 3 e igual a 15 francos' => [5, 3, 15],
			'0 franco vezes por 0 e igual a 0 franco' => [0, 0, 0],
			'1 franco vezes por 1 e igual a 1 franco' => [0, 0, 0],
			PHP_INT_MAX . ' francos vezes por 1 e igual a ' . PHP_INT_MAX . ' francos' => 
				[PHP_INT_MAX , 1, PHP_INT_MAX],
			PHP_INT_MAX . ' francos vezes por 2 e igual a ' . PHP_INT_MAX * 2 . ' francos' => 
				[PHP_INT_MAX , 2, PHP_INT_MAX * 2],
		];
	}

	/**
	* O objetivo do teste é validar se é possível multiplicar um franco por um 
	* escalar qualquer.
	*
	* @param int $quantidade    Quantidade com a qual o franco será criado.
	* @param int $multiplicador Valor pelo qual o franco criado será multiplicado
	* @param int $resultado     Resultado da multiplicação
	*
	* @dataProvider provedorDoTesteMultiplicarFrancoPorUmEscalar
	* @name   testMultiplicarFrancoPorUmEscalar
    * @access public
	* @return void
	*/
	public function testMultiplicarFrancoPorUmEscalar($quantidade, $multiplicador, $resultado)
	{
		self::assertEquals(
			Dinheiro::franco($resultado), Dinheiro::franco($quantidade)->multiplicarPor($multiplicador)
		);
	}

	/**
	* O objetivo do teste é verificar se quando criamos dois objetos
	* iguais suas quantidades também são iguais.
	*
	* @name   testVerificarSeDoisObjetosFrancoSaoIguais
    * @access public
	* @return void
	*/
	public function testVerificarSeDoisObjetosFrancoSaoIguais()
	{	
		self::assertTrue(Dinheiro::franco(5)->equals(Dinheiro::franco(5)));
	}


	/**
	* O objetivo do teste é verificar se o tipo da moeda do
	* objeto Franco é igual a CHF.  
	*
	* @name   testVerificarSeAMoedaDeFrancoEIgualAChf
    * @access public
	* @return void
	*/
	public function testVerificarSeAMoedaDeFrancoEIgualAChf()
	{
		self::assertEquals('CHF', Dinheiro::franco(5)->moeda());
	}	

	/**
	* Provedor dos dados do teste testMultiplicarDollarPorUmEscalar.
	*
	* @name   provedorDoTesteMultiplicarDollarPorUmEscalar
	* @access public
	* @return array
	*/
	public function provedorDoTesteMultiplicarDollarPorUmEscalar()
	{
		return [
			'5 dollares vezes 2 e igual a 10 dollares' => [5, 2, 10],
			'5 dollares vezes 3 e igual a 15 dollares' => [5, 3, 15],
			'0 dollar vezes por 0 e igual a 0 dollar' => [0, 0, 0],
			'1 dollar vezes por 1 e igual a 1 dollar' => [0, 0, 0],
			PHP_INT_MAX . ' dollares vezes por 1 e igual a ' . PHP_INT_MAX . ' dollares' => 
				[PHP_INT_MAX , 1, PHP_INT_MAX],
			PHP_INT_MAX . ' dollares vezes por 2 e igual a ' . PHP_INT_MAX * 2 . ' dollares' => 
				[PHP_INT_MAX , 2, PHP_INT_MAX * 2],
		];
	}

	/**
	* O objetivo do teste é validar se é possível multiplicar um Dollar por um 
	* escalar qualquer.
	*
	* @param int $quantidade    Quantidade com a qual o Dollar será criado.
	* @param int $multiplicador Valor pelo qual o Dollar criado será multiplicado
	* @param int $resultado     Resultado da multiplicação
	*
	* @dataProvider provedorDoTesteMultiplicarDollarPorUmEscalar
	* @name   testMultiplicarDollarPorUmEscalar
    * @access public
	* @return void
	*/
	public function testMultiplicarDollarPorUmEscalar($quantidade, $multiplicador, $resultado) 
	{
		self::assertEquals(
			Dinheiro::dollar($resultado), Dinheiro::dollar($quantidade)->multiplicarPor($multiplicador)
		);
	}

	/**
	* O objetivo do teste é verificar se quando criamos dois objetos
	* iguais suas quantidades também são iguais.
	*
	* @name   testVerificarSeDoisObjetosDollarSaoIguais
    * @access public
	* @return void
	*/
	public function testVerificarSeDoisObjetosDollarSaoIguais()
	{	
		self::assertTrue(Dinheiro::dollar(5)->equals(Dinheiro::dollar(5)));
	}
	/**
	* O objetivo do teste é verificar se o tipo da moeda do
	* objeto Dollar é igual a USD.  
	*
	* @name   testVerificarSeAMoedaDeDollarEIgualAUsd
    * @access public
	* @return void
	*/
	public function testVerificarSeAMoedaDeDollarEIgualAUsd()
	{
		self::assertEquals('USD', Dinheiro::dollar(5)->moeda());
	}

}