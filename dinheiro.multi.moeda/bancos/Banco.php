<?php

/**
* Classe para representar um banco.
* 
* @abstract   
*
* @name       Banco
* @category   Aplicacao
* @package    Bancos
* @subpackage Banco
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
class Banco
{
	/**
	* Método de conversão entre os vários tipos de moedas.
	*
	* @param Expressao $expressao 	  Expressão.
	* @param string    $converterPara String de conversão.
	*
	* @name   converter
	* @access public
	* @return new Dinheiro
	*/
	public function converter(Expressao $expressao, $converterPara)
	{
		return $expressao->converter($converterPara);
	}
}