<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.8_Closures e Generators');
 
/*
*
*/
PHPClassSession('CLOSURES', __LINE__);

$myAge = function ($year)
{
    $age = date("Y") - $year;
    return "<h5> Vocẽ tem $age anos ! </h5>";
};

echo $myAge(1986);
    
$priceBRL = function ($price) {
    return number_format($price, 2, ",", ".");
};

echo "<p> O primeiro projeto do Develop Anildo que venderá ao CARREFOUR custará R$ {$priceBRL(13800)}. Vamos Fechar ?</p>";

$myCart = [];
$myCart['totalPrice'] = 0;

$cardADD = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];

};

$cardADD("INFRA ESTRUTURA DO DESENVOLVIMENTO PARA CARREFOUR", 1, 900);
$cardADD("ALGORITIMOS E ATUALIZAÇÃO EXECUTIVA", 2, 2400);

var_dump($myCart);

PHPClassSession('GENERATORS', __LINE__);

$iterator = 40;

function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date("d/m/y", strtotime("+{day}days"));
    }
    return $saveDate;
}

echo "<div>";
foreach (showDates($iterator) as $date) {
    echo "<small class='tag'> {$date} </small>" . PHP_EOL;

}
echo "</div>";












function generatorDAtes($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/y", strtotime("+{day}days"));

    }
}
echo "<div style='text-align: center'>";
foreach (generatorDates($iterator) as $date) {
    echo "<small class='tag'> {$date} </small>" . PHP_EOL;

}
echo "</div>";