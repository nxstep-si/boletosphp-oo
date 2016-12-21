<?php
require_once "vendor/autoload.php";

echo "12";
use GiordanoLima\BoletosPHP\Boletos;

$boleto = new Boletos(Boletos::BOLETOSPHP_ITAU);
$boleto->setImageBasePath("images/");
echo $boleto->render();
echo "12";
?>