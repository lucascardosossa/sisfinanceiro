<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:57
 */
namespace Controller;

use Model\ContasPagar;
use Utilities\Funcoes;

class ContasPagarController extends BaseController
{

    private static $view = 'contas_pagar';
    private $objModel;
    private $funcoes;

    /**
     * ContasPagarController constructor.
     * @param $content
     */
    public function __construct()
    {
        $this->objModel = new ContasPagar();
        $this->funcoes = new Funcoes();
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
            $_GET['ContaPagar']['valor'] = $this->funcoes->formataValorDb($_GET['ContaPagar']['valor']);
            $_GET['ContaPagar']['data'] = $this->funcoes->FormataData($_GET['ContaPagar']['data']);
            $recorrente = isset($_GET['recorrente']) ? 1 : 0;
            if ($recorrente) {
                return $this->SaveRecorrencia();
            } else {
                if ($this->objModel->save($_GET['ContaPagar'])) {
                    $retorno = $this->index(1);
                    return $this->setContent('index', self::$view, $retorno);
                }
            }

        } else {
            return $this->setContent('form', self::$view);
        }

    }

    public function edit()
    {
        if (isset($_POST)) {

            $_POST['ContaPagar']['valor'] = $this->funcoes->formataValorDb($_POST['ContaPagar']['valor']);
            $_POST['ContaPagar']['data'] = $this->funcoes->FormataData($_POST['ContaPagar']['data']);
            if ($this->objModel->update($_POST['ContaPagar'], $_POST['ContaPagar']['id'])) {
                echo 'sucesso';
            } else
                echo 'erro';
        }

    }

    public function delete()
    {
        if (isset($_POST)) {
            if ($this->objModel->delete($_POST['id']))
                echo "sucesso";
            else
                echo 'erro';
        }
    }

    /**
     * @return string
     */
    private function SaveRecorrencia()
    {
        $mes = explode('-', $_GET['ContaPagar']['data'])[1];
        $currentData = $_GET['ContaPagar']['data'];
        $retorno = false;
        for ($i = $mes; $i <= 12; $i++) {
            $dados = ['descricao' => $_GET['ContaPagar']['descricao'], 'valor' => $_GET['ContaPagar']['valor'], 'data' => $currentData];
            $retorno = $this->objModel->save($dados);
            $currentData = date("Y-m-d", strtotime("+1 month", strtotime($currentData)));
        }
        if ($retorno) {
            $retorno = $this->index(1);
            return $this->setContent('index', self::$view, $retorno);
        } else
            return false;
    }

}