<?php

$array = [
    1 => 'a',
    '1'  => 'b',
    1.3 => 'c',
    true => 'd',
    'qualquer_coisa' => 'teste'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}