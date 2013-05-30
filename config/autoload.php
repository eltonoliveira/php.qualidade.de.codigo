<?php
function carregarMoedas($nomeDaClasse)
{
	if(file_exists('./dinheiro.multi.moeda/moedas/' . $nomeDaClasse . '.php'))
	{
		include './dinheiro.multi.moeda/moedas/' . $nomeDaClasse . '.php';
	}
}

spl_autoload_register('carregarMoedas');

function carregarInterfaces($nomeDaInterface)
{
	if(file_exists('./dinheiro.multi.moeda/interfaces/' . $nomeDaInterface . '.php'))
	{
		include './dinheiro.multi.moeda/interfaces/' . $nomeDaInterface . '.php';
	}
}

spl_autoload_register('carregarInterfaces');

function carregarBancos($nomeDoBanco)
{
	if(file_exists('./dinheiro.multi.moeda/bancos/' . $nomeDoBanco . '.php'))
	{
		include './dinheiro.multi.moeda/bancos/' . $nomeDoBanco . '.php';
	}
}

spl_autoload_register('carregarBancos');