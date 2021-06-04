<?php

// $cursos = ['PHP', 'Python', 'JS', 1, 1.22];

// var_dump($cursos);

// $curso = [
//     'nome' => 'PHP',
//     'versao' => 8.1
// ];

// var_dump($curso['versao']);

$cursos = [
    0 => [
        'nome' => 'php',
        'versao' => '8.1'
    ],
    1 => [
        'nome' => 'Python',
        'versao' => '3.2'
    ],
    2 => [
        'nome' => 'JS',
        'versao' => '2021'
    ],
];

var_dump($cursos[1]['versao']);