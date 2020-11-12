<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.6 - EStrutura de Controle');
 

PHPClassSession('IF, ELSEIF, ELSE', __LINE__);

$test = true;
if($test) {
    var_dump(true);
} else {
    var_dump(false);
}

$age = 51;

if ($age < 20) {
 var_dump("INSTITUTO FEDERAL TOCANTIS");
}elseif($age > 20 && $age < 50) {
    var_dump("PROGRAMADOR WEB");
} else {
 var_dump("NOVOS CAMINHOS");
}

PHPClassSession('ISSET, EMPTY, !', __LINE__);

$time = "";

if (isset($time)) {
    var_dump("TODO CEARAGAY É SOFREDOR");
    
} else {
    var_dump("PALMEIRAS NÃO TEM MUNDIAL");
    
}

// NEGAÇÃO USA-SE O SINAL "!"
if (!empty($time)) {
    var_dump("PROGRAMADOR WEB ANILDEV");
    
} else {
    
}




PHPClassSession('SWITCH', __LINE__);

$payment = "completed";

// o que for encontrato do switch será informado.
switch ($payment) {
    case "billet_printed":
    var_dump("Boleto impresso");
        break;
    case "canceled";
        var_dump(")Pagamento cancelado");        ;
        break;
    case "approved":
    case "completed":
    var_dump("Pagamento aprovado");
        break; 
    default:
        var_dump("Erro ao processar pagamento");
        break;
}