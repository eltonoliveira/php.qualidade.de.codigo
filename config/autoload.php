<?php
function carregarMoedas($nomeDaClasse)
{
	if(file_exists('./dinheiro.multi.moeda/moedas/' . $nomeDaClasse . '.php'))
	{
		include './dinheiro.multi.moeda/moedas/' . $nomeDaClasse . '.php';
	}
}

spl_autoload_register('carregarMoedas');