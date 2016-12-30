<?php

namespace GiordanoLima\BoletosPHP\Boletos;

class Bancoob extends AbstractBoleto
{
    /**
     * Retorna campos obrigatórios
     *
     * @return array
     */
    public function getRequiredFields()
    {
        $fields = [
            'contrato',
        	'numero_parcela',
        	'total_parcelas',
        ];

        return array_merge(self::$requiredFields, $fields);
    }
}