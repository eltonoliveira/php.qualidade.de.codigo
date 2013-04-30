<?php
/**
* @abstract   Classe da moeda Dollar
* @autor      Elton D. de Oliveira
* @name       Dollar
* @package    Moedas
* @subpackage Dollar
* @version    1.0
* @copyright  GPL (http://www.gnu.org/licenses/gpl.html)
*/
class Dollar
{
	/**
	* @var int 
	*/
	public $quantidade;

	/**
	*
	* @name   __construct
	* @param  $quantidade
	* @access public
	* @return void
	*/
	public function __construct($quantidade = 1)
	{
		$this->quantidade = $quantidade;
	}	

	/**
	* Multiplica o a quantidade do objeto Dollar por um multiplicador.
	*
	* @name   multiplicarPor
	* @param  $multiplicador
	* @access public
	* @return void
	*/
	public function multiplicarPor($multiplicador)
	{
		$this->quantidade *= $multiplicador;
	}
}