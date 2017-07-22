<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:57
 */

namespace Controller;


use Model\ContasReceber;

class ContasReceberController extends BaseController
{

    private static $view = 'contas_receber';
    private $objModel;
    /**
     * ContasReceberController constructor.
     */
    public function __construct()
    {
        $this->objModel = new ContasReceber();
    }


    public function index($afterInsert = 0)
    {
        $arrayModel['dados'] = $this->objModel->getAll();
        $arrayModel['newRecord'] = $afterInsert;
        if ($afterInsert)
            return $arrayModel;
        else
            return $this->setContent('index', self::$view, $arrayModel);
    }

    public function create($params)
    {
        if ($params['action'] == 'insert_ctreceber') {
            $_GET['ContaReceber']['valor'] = number_format((float)$_GET['ContaReceber']['valor'], 2);
            $_GET['ContaReceber']['data'] = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['ContaReceber']['data'])));
            if ($this->objModel->save($_GET['ContaReceber'])) {
                $retorno = $this->index(1);
                return $this->setContent('index', self::$view, $retorno);
            }
        } else {
            return $this->setContent('form', self::$view);
        }

    }
}