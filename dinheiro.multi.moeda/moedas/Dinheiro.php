<?php
require_once './config/autoload.php';

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
class Dinheiro implements Expressao
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
	* Retornar a quantidade de Dinheiro
	*
	* @name   getQuantidade
	* @access public
	* @return int
	*/
	public function getQuantidade()
	{
		return $this->_quantidade;
	}

	/**
	* Retorna uma string com o tipo de moeda do objeto. 
	*
	* @name   getMoeda
	* @access public
	* @return string
	*/
	public function getMoeda()
	{
		return $this->_moeda;
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
		return new Dinheiro('USD', $quantidade);
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
		self::getMoeda() == $dinheiro->getMoeda();
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
		return new Dinheiro('CHF', $quantidade);
	}

	/**
	* Retorna um novo objeto Dinheiro cuja quantidade será a do objeto
	* dinheiro existente multiplicada pelo multiplicador passado.
	*
	* @param int $multiplicador Valor pelo qual a quantidade do objeto criado será 
	* multiplicada.
	*
	* @name   multiplicarPor
	* @access public
	* @return new Dinheiro
	*/
	public function multiplicarPor($multiplicador)
	{
		return new Dinheiro($this->_moeda, $this->_quantidade * $multiplicador);
	}

	/**
	* Adiciona uma quantidade X ao Dinheiro corrente e retorna um novo objeto Dinheiro
	* criado com a soma dos valores.
	*
	* @param Dinheiro $dinheiroAdicionado 
	*
	* @name   adicionarMais
	* @access public
	* @return new Dinheiro
	*/
	public function adicionarMais(Dinheiro $dinheiroAdicionado)
	{
		return new Dinheiro($this->_moeda, $this->_quantidade + $dinheiroAdicionado->_quantidade);
	}

	/**
	* Adiciona uma quantidade X ao Dinheiro corrente e retorna um novo objeto Soma
	* criado com a soma dos valores.
	*
	* @param Dinheiro $dinheiro
	*
	* @name   
	* @access public
	* @return new Soma
	*/
	public function mais(Dinheiro $dinheiro)
	{
		return new Soma($this, $dinheiro);
	}

	/**
	* Método criado para garantir o contrato com a a interface Expressao.
	*
	* @param string $converterPara
	*
	* @name   converter
	* @access public
	* @return $this
	*/
	public function converter($converterPara)
	{
		return $this;
	}

}
