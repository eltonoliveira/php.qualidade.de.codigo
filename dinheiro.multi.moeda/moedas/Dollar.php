<?php

/**
* Classe para representar o objeto dollar.
* 
* @abstract   A classe Dollar é uma classe criada para representar o objeto
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
class Dollar
{
	/**
	* @var int Valor que irá representar a quantidade de dollares do objeto. 
	*/
	public $quantidade;

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
		$this->quantidade = $quantidade;
	}	

	/**
	* Multiplica o a quantidade do objeto Dollar por um multiplicador.
	*
	* @param int $multiplicador Valor pelo qual a quantidade de dollar será 
	* multiplicada.
	*
	* @name   multiplicarPor
	* @access public
	* @return void
	*/
	public function multiplicarPor($multiplicador)
	{
		return new Dollar($this->quantidade * $multiplicador);
	}
}