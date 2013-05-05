<?php

/**
* Classe para representar a moeda franco.
* 
* @abstract   A classe Franco é uma classe criada para representar a moeda
* franco. Ela será criada de acordo com as especificações do livro TDD: 
* Desenvolvimento Guiado por testes, do Kent Beck.
*
* @name       Franco
* @category   Aplicacao
* @package    Moedas
* @subpackage Franco
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class Franco extends Dinheiro
{
	/**
	* Construtor
	*
	* @param string $moeda String que representa o tipo de moeda.
	* @param int    $quantidade Valor com que irá definir quantos francos o 
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
	* Multiplica o a quantidade do objeto Franco por um multiplicador e retorna
	* um nova instância de Franco.
	*
	* @param int $multiplicador Valor pelo qual a quantidade de franco será 
	* multiplicada.
	*
	* @name   multiplicarPor
	* @access public
	* @return new Franco
	*/
	public function multiplicarPor($multiplicador)
	{
		return Dinheiro::franco($this->_quantidade * $multiplicador);
	}
}