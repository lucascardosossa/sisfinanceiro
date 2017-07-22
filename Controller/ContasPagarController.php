<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:57
 */
namespace Controller;

use Model\ContasPagar;

class ContasPagarController extends BaseController
{

    private static $view = 'contas_pagar';
    private $objModel;

    /**
     * ContasPagarController constructor.
     * @param $content
     */
    public function __construct()
    {
        $this->objModel = new ContasPagar();
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
        if ($params['action'] == 'insert_ctpagar') {
            $_GET['ContaPagar']['valor'] = number_format((float)$_GET['ContaPagar']['valor'], 2);
            $_GET['ContaPagar']['data'] = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['ContaPagar']['data'])));
            if ($this->objModel->save($_GET['ContaPagar'])) {
                $retorno = $this->index(1);
                return $this->setContent('index', self::$view, $retorno);
            }
        } else {
            return $this->setContent('form', self::$view);
        }

    }

}