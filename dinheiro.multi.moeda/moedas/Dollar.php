<?php

/**
* Classe para representar a moeda dollar.
* 
* @abstract   A classe Dollar é uma classe criada para representar a moeda
* dollar. Ela será criada de acordo com as especificações do livro TDD: 
* Desenvolvimento Guiado por testes, do Kent Beck.
*
* @name       Dollar
* @category   Aplicacao
* @package    Moedas
* @subpackage Dollar
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class Dollar extends Dinheiro
{
	/**
	* Construtor
	*
	* @param string $moeda String que representa o tipo de moeda.
	* @param int    $quantidade Valor com que irá definir quantos dollares o 
	* objeto criado irá conter.
	*
	* @name   __construct
	* @access public
	* @return void
	*
	*/
	public function __construct($moeda, $quantidade = 1)
	{
		parent::__construct($moeda, $quantidade);
	}	

	/**
	* Multiplica o a quantidade do objeto Dollar por um multiplicador e retorna
	* um nova instância de Dollar.
	*
	* @param int $multiplicador Valor pelo qual a quantidade de dollar será 
	* multiplicada.
	*
	* @name   multiplicarPor
	* @access public
	* @return new Dollar
	*/
	public function multiplicarPor($multiplicador)
	{
		return Dinheiro::dollar($this->_quantidade * $multiplicador);
	}

}