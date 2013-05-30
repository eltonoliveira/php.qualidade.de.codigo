<?php
/**
* Interface para representar uma expressão.
* 
* @abstract   
*
* @name       Expressao
* @category   Aplicacao
* @package    Interfaces
* @subpackage Expressao
* @author     Elton D. de Oliveira <elton.douglas.oliv@gmail.com>
* @license    GPL http://www.gnu.org/licenses/gpl.html
* @link       Ver documentação
*/
interface Expressao
{
	/**
	* Método de conversão entre os vários tipos de moedas.
	*
	* @param string $converterPara
	*
	* @name   converter
	* @access public
	* @return new Dinheiro
	*/
	public function converter($converterPara);

}