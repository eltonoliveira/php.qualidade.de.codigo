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
	* @param int $quantidade Valor com que irá definir quantos dollares o o 
	* objeto criado irá conter.
    *
	* @name   __construct
	* @access public
	* @return void
	*
	*/
	public function __construct($quantidade = 1)
	{
		$this->_quantidade = $quantidade;
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
		return new Dollar($this->_quantidade * $multiplicador);
	}


}