<?php
include ('funcoes.php');
//array associativas.

/*$conta1 = [
    'titular' => 'vinicius',
    'saldo' => 1000
  ];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
     'titular' => 'Alberto',
    'saldo' => 300
];*/

$contasCorrentes = [
    '12345678910' => [
       'titular' => 'vinicius',
       'saldo' => 1000
   ],
    '12345678911' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '12345678912' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];
//print_r($contasCorrentes);
//echo $contasCorrentes [12345678911]['titular'].PHP_EOL;
//indice $cpf

//saque
$contasCorrentes['12345678910'] =
    sacar($contasCorrentes['12345678910'],500);

$contasCorrentes['12345678911'] =
    sacar($contasCorrentes['12345678911'],500);

$contasCorrentes ['12345678912'] =
    sacar($contasCorrentes['12345678912'],500);

//depositar
$contasCorrentes ['12345678912'] =
   depositar($contasCorrentes['12345678912'],-1000);



foreach ($contasCorrentes as $cpf => $conta){
    // exibeMensagem($cpf. " ". $conta['titular']. " " . $conta['saldo']);
    //exibeMensagem("$cpf $conta[titular] $conta[saldo]");
      exibeMensagem("$cpf{$conta['titular']} {$conta['saldo']}");
}
