<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 22/07/17
 * Time: 18:22
 */

namespace Utilities;


class Funcoes
{

    function ExibeData($data)
    {
        return date("d/m/Y", strtotime($data)); //exibe no formato d/m/a
    }

    function FormataData($data)
    {
        return date("Y-m-d", strtotime(str_replace('/', '-', $data))); //formata para a-m-d
    }

    function formataValorDb($valor)
    {
        return str_replace(',', '.', str_replace('.', '', $valor));
    }

    function exibeValor($valor)
    {
        return number_format($valor, 2, ",", ".");

    }

}