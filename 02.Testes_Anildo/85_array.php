<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.5 - ARRAYS');
 
/*
*
*/
PHPClassSession('INDEX ARRAY', __LINE__);
$arrA = array(1, 2, 3);
var_dump($arrA);


$arrB = [0, 1, 2, 3];
var_dump($arrB);

$arrayIndex = [
    "Anildo",
    "Cloe",
    "Janinny"
];

$arrayIndex [] = "Elizabete";
$arrayIndex [] = "Raimundo";

var_dump($arrayIndex);


PHPClassSession('ASSOCIATIVE ARRAY', __LINE__);
$arrayAssoc = [
    "docente" => "Anildo da Silva Gomes",
    "tutor1" => "JOEL LOPES",
    "tutor2" => "PAULO VICTOR"
];

//podemos adcionar novos
$arrayAssoc["Supervisor"] = "Paulo Jardeson";

var_dump($arrayAssoc);


PHPClassSession('MULTIDIMENSIONAL ARRAY', __LINE__);

$coordenacao = [
    "Coordenação" => [
        "Coordenação Administrativa" => "NICOLE MARIA",
        "Coordenação Auxiliar" => "LARISSA GATINHA",
    ]
    ];

$team = [
    $coordenacao,
    $arrayAssoc,
];

var_dump($coordenacao, $team);



PHPClassSession('ARRAY ACCESS', __LINE__);

$team = [
    "Docente" => "Anildo",
    "tutor1" => "ELISVAM",
    "tutor2" => "ISRAELY"
];
echo "equipe Programador WEB" . PHP_EOL;

foreach($team as $key =>$value){
    echo "<p>$value é o $key do time!</p>";
}