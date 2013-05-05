<?php
require_once './config/autoload.php';

/**
* Classe de teste da moeda dollar.
*
* @name       DollarTest
* @category   Testes
* @package    Moedas
* @subpackage Dollar
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class DollarTest extends PHPUnit_FrameWork_TestCase
{
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
		self::assertFalse(Dinheiro::dollar(5)->equals(Dinheiro::dollar(6)));
	}

	/**
	* O objetivo do teste é verificar se um objeto Dollar é diferente
	* de um objeto Franco.
	*
	* @name   testVerificarSeUmObjetoDollarEDiferenteDeUmObjetoFranco
    * @access public
	* @return void
	*/
	public function testVerificarSeUmObjetoDollarEDiferenteDeUmObjetoFranco()
	{
		self::assertFalse(Dinheiro::dollar(5)->equals(Dinheiro::franco(5)));
	}

	/**
	* O objetivo do teste é verificar se o tipo da moeda do
	* objeto Dollar é igual a USD.  
	*
	* @name   testVerificarSeAMoedaEIgualAUsd
    * @access public
	* @return void
	*/
	public function testVerificarSeAMoedaEIgualAUsd()
	{
		self::assertEquals('USD', Dinheiro::dollar(5)->moeda());
	}	
}