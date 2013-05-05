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
	* @var string String que representa o tipo de moeda. 
	*/
	protected $_moeda;

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
		$this->_quantidade = $quantidade;
		$this->_moeda 	   = $moeda;
	}	

	/**
	* Método estático para criar uma instância da classe Dollar.
	*
	* @param int $quantidade Valor que irá representar a quantidade do objeto.
	*
	* @name   dollar
	* @access public
	* @return new Dollar
	*/
	public static function dollar($quantidade = 1)
	{
		return new Dollar('USD', $quantidade);
	}

	/**
	* Método estático para criar uma instância da classe Franco.
	*
	* @param int $quantidade Valor que irá representar a quantidade do objeto.
	*
	* @name   franco
	* @access public
	* @return new Franco
	*/
	public static function franco($quantidade = 1)
	{
		return new Franco('CHF', $quantidade);
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

	/**
	* Retorna uma string com o tipo de moeda do objeto. 
	*
	* @name   moeda
	* @access public
	* @return string
	*/
	public function moeda()
	{
		return $this->_moeda;
	}	
}
