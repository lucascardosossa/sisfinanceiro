<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 23/07/17
 * Time: 17:11
 */

namespace Controller;


use Model\ContasPagar;
use Model\ContasReceber;

class LancamentosController extends BaseController
{

    private static $view = 'lancamentos';
    private $contaPagar;
    private $contaReceber;

    /**
     * LancamentosController constructor.
     * @param $contaPagar
     * @param $contaReceber
     */
    public function __construct()
    {
        $this->contaPagar = new ContasPagar();
        $this->contaReceber = new ContasReceber();
    }


    public function proximos30()
    {
        $now = date('Y-m-d');
        $until = date('Y-m-d', (strtotime("+1 month", strtotime($now))));
        $conditions = " data BETWEEN '$now' and '$until' ";
        $contasPagar = $this->contaPagar->getByConditions($conditions);
        $contasReceber = $this->contaReceber->getByConditions($conditions);

        // Calculo do equilibrio
        $tContaPagar = $tContaReceber = 0;
        foreach ($contasPagar as $item) {
            $tContaPagar += $item['valor'];
        }
        foreach ($contasReceber as $item) {
            $tContaReceber += $item['valor'];
        }
        $equilibrio = abs($tContaReceber - $tContaPagar);

        $data = [
            'contaPagar' => $contasPagar,
            'contaReceber' => $contasReceber,
            'grafico' => [
                'ctpagar_fin' => $tContaPagar,
                'ctreceber_fin' => $tContaReceber,
                'equilibrio_fin' => $equilibrio
            ]
        ];
        return $this->setContent('index', self::$view, $data);
    }
}