<?php
require_once "../vendor/autoload.php";
use GiordanoLima\BoletosPHP\Boletos;
/*
 * Modelo apenas demonstrativo para o layout
 * Para validar os dados insira informações reais
 */
$boleto = new Boletos(Boletos::BOLETOSPHP_BANCOOB);
//var_dump($boleto);
$boleto->setData([
		//Campos requeridos
		
		"valor_boleto" => "25,00",
		"data_vencimento" => "02/01/2017",
		"nosso_numero" => "1600023",//passar o índice do boleto
		"agencia" => "3046",
		"conta" => "12345", //Número da conta
		"conta_dv" => "6",
		"convenio" => "6744658", //Código do Cliente
		"carteira" => "1",
		"identificacao" => "Minha Própria Empresa LTDA",
		"cpf_cnpj" => "72.035.942/0001-16",
		
		
		//DEMAIS CAMPOS
		
		"numero_documento" => "TI-009",//por enquanto o mesmo do contrato
		"data_documento" => "01/04/2016",
		"data_processamento" => "01/04/2016",
		"endereco" => "Rua Endereço do Cedente, 1000 Diamantina",
		
		"sacado" => "Nome do Sacado",
		"endereco1" => "Primeira linha endereço sacado",
		"endereco2" => "Segunda linha endereço sacado",
		
		//Informativo do canhoto que fica com o Sacado
		"demonstrativo1" => "Demonstrativo 1 do canhoto - interno/não vai pro banco - informação ao cliente",
		"demonstrativo2" => "Demonstrativo 2 do canhoto",
		"demonstrativo3" => "Demonstrativo 3 do canhoto",
		
		//Instruções dentro do boleto
		"instrucoes1" => "COBRAR MORA/DIAR$ 3,30 APOS O VENCIMENTO",
		"instrucoes2" => "INFORMAÇÕES DE CONTATO DO CLIENTE",
		"instrucoes3" => "REIMPRESSÃO DO BOLETO                   ",
		"instrucoes4" => "WWW.SICOO.COM.BR @ DEMAIS INFORMAÇÕES",
		
		
		"quantidade" => "25,00",
		"valor_unitario" => "1,0",
		"aceite" => "N",
		"especie" => "R$",
		"especie_doc" => "DM",
		"cidade_uf" => "Diamantina/MG",
		"cedente"=> "RAZÃO SOCIAL LTDA, ETC – ME",
		
		//Específicos do SICOOB
		"modalidade_cobranca" => "01",
		"valor_desconto_1" => "2,30",
		"valor_desconto_2" => "4,20",
		"valor_multa" => "3,14",
		"contrato"=> "TI-009",
		"numero_parcela" => "03",
		"total_parcelas" => "03"

]);
$boleto->setImageBasePath("../imagens/");
echo $boleto->render();

/*
 $dadosboleto = $boleto->getDadosBoleto();

 foreach ($dadosboleto as $i => $value) {
	echo($dadosboleto[$i]."<br />");
} */

?>