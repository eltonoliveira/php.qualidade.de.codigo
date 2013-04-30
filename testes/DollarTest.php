<?php
include_once './config/autoload.php';

/**
* @abstract   Classe de teste da moeda Dollar
* @autor      Elton D. de Oliveira
* @name       DollarTest
* @package    Testes
* @subpackage TestesDollar
* @version    1.0
* @copyright  GPL (http://www.gnu.org/licenses/gpl.html)
*/
class DollarTest extends PHPUnit_FrameWork_TestCase
{
	/**
	* O objetivo do teste é validar se é possível multiplicar um Dollar por um escalar qualquer.
	*
	* @name   testMultiplicarDollarPorUmEscalar
	* @access public
	* @return void
	*/
	public function testMultiplicarDollarPorUmEscalar()
	{
		$dollar = new Dollar(5);
		$dollar->multiplicarPor(2);
		self::assertEquals(10, $dollar->quantidade);
	}
}