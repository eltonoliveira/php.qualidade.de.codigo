<?php
require_once './config/autoload.php';

/**
* Classe de teste da moeda franco suiço
*
* @name       FrancoTest
* @category   Testes
* @package    Moedas
* @subpackage Franco
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class FrancoTest extends PHPUnit_FrameWork_TestCase
{
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
		$franco = new Franco($quantidade);
		self::assertEquals(new Franco($resultado), $franco->multiplicarPor($multiplicador));
	}

	/**
	* O objetivo do teste é verificar se quando criamos dois objetos
	* iguais suas quantidades também são iguais.
	*
	* @name   testVerificarAIgualdadeEntreDoisObjetosFranco
    * @access public
	* @return void
	*/
	public function testVerificarAIgualdadeEntreDoisObjetosFranco()
	{	
		$franco = new Franco(5);
		self::assertTrue($franco->equals(new Franco(5)));
		self::assertFalse($franco->equals(new Franco(6)));
	}
}