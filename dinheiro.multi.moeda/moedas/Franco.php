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
class Franco
{
	/**
	* @var int Valor que irá representar a quantidade de francos do objeto. 
	*/
	private $quantidade;

	/**
	* Construtor
	*
	* @param int $quantidade Valor com que irá definir quantos francos o o 
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
		return new Franco($this->quantidade * $multiplicador);
	}

	/**
	* Verifica a igual entre duas instancias de Franco que tenham sido criadas
	* com a mesma quantidade.
	*
	* @param Franco $franco Outra instância de Franco cujo valor da quantidade
	* será comparado com o valor da quantidade do Dollar atual.
	*
	* @name   equals
	* @access public
	* @return bollean
	*/
	public function equals(Franco $franco)
	{
		return $this->quantidade == $franco->quantidade;
	}
}