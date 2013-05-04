<?php

/**
* Classe para representar dinheiro.
* 
* @abstract   A classe Dinheiro é uma classe criada para representar uma moeda.
* Ela será criada de acordo com as especificações do livro TDD: 
* Desenvolvimento Guiado por testes, do Kent Beck.
*
* @name       Dinheiro
* @category   Aplicacao
* @package    Moedas
* @subpackage Dinheiro
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class Dinheiro
{
	/**
	* @var int Valor que irá representar a quantidade do objeto. 
	*/
	protected $_quantidade;	

	/**
	* Método estático para criar uma instância da classe Dollar.
	*
	* @param int $quantidade Valor que irá representar a quantidade do objeto.
	*
	* @name   dollar
	* @access static
	* @return new Dollar
	*/
	public static function dollar($quantidade = 1)
	{
		return new Dollar($quantidade);
	}

	/**
	* Método estático para criar uma instância da classe Franco.
	*
	* @param int $quantidade Valor que irá representar a quantidade do objeto.
	*
	* @name   franco
	* @access static
	* @return new Franco
	*/
	public static function franco($quantidade)
	{
		return new Franco($quantidade);
	}

	/**
	* Verifica a igual entre duas instancias de Dinheiro que tenham sido criadas
	* com a mesma quantidade.
	*
	* @param Dinheiro $dinheiro Outra instância de Dinheiro cujo valor da quantidade
	* será comparado com o valor da quantidade do Dinheiro atual.
	*
	* @name   equals
	* @access public
	* @return bollean
	*/
	public function equals(Dinheiro $dinheiro)
	{
		return $this->_quantidade == $dinheiro->_quantidade &&
		get_class($this) === get_class($dinheiro);
	}
}
