<?php
function exibeMensagem ($mensagem)
{
    echo $mensagem .PHP_EOL;
}
function sacar(array $conta, float $valorAsacar) : array
{
    if ($conta['saldo']< $valorAsacar){
        exibeMensagem($conta['titular' ]." Você não possui saldo para sacar este Valor:"."\nSaldo Atual ".$conta['saldo']." R$");
    }else{
        $conta['saldo'] -= $valorAsacar;
    }
    return $conta;
}

function depositar (array $conta, float $valorAdepositar) : array
{
    if ($valorAdepositar <0){
        exibeMensagem("Valor Invalido!");
    }
    else{
        $conta ['saldo']+= $valorAdepositar;

    }
    return $conta;
}