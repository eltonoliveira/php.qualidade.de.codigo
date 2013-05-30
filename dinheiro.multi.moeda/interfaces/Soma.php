<?php

/**
* Classe para representar uma soma.
* 
* @abstract   Classe para representar uma soma.
*
* @name       Soma
* @category   Aplicacao
* @package    Interfaces
* @subpackage Soma
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class Soma implements Expressao
{
	/**
	* @var int|float Valor da primeira parcela. 
	*/
	public $primeiraParcela;
	/**
	* @var int|float Valor da segund parcela.  
	*/
	public $segundaParcela;

	/**
	* Construtor
	*
	* @param Dinheiro $primeiraParcela Primeira parcela da soma
	* @param Dinheiro $segundaParcela  Segunda parcela da soma
	*
	* @name   __construct
	* @access public
	* @return void
	*
	*/
	public function __construct(Dinheiro $primeiraParcela , Dinheiro $segundaParcela)
	{
		$this->primeiraParcela = $primeiraParcela;
		$this->segundaParcela  = $segundaParcela;
	}	

	/**
	* Método de conversão entre os vários tipos de moedas.
	*
	* @param string $converterPara
	*
	* @name   converter
	* @access public
	* @return new Dinheiro
	*/
	public function converter($converterPara)
	{
		$total = $this->primeiraParcela->getQuantidade() + $this->segundaParcela->getQuantidade();
		return new Dinheiro($converterPara, $total);
	}	
}