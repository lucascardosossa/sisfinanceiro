<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:57
 */

namespace Controller;


use Model\ContasReceber;
use Utilities\Funcoes;

class ContasReceberController extends BaseController
{

    private static $view = 'contas_receber';
    private $objModel;
    private $funcoes;
    /**
     * ContasReceberController constructor.
     */
    public function __construct()
    {
        $this->objModel = new ContasReceber();
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
        if ($params['action'] == 'insert_ctreceber') {
            $_GET['ContaReceber']['valor'] = $this->funcoes->formataValorDb($_GET['ContaReceber']['valor']);
            $_GET['ContaReceber']['data'] = $this->funcoes->FormataData($_GET['ContaReceber']['data']);
            if ($this->objModel->save($_GET['ContaReceber'])) {
                $retorno = $this->index(1);
                return $this->setContent('index', self::$view, $retorno);
            }
        } else {
            return $this->setContent('form', self::$view);
        }

    }

    public function edit()
    {
        if (isset($_POST)) {

            $_POST['ContaReceber']['valor'] = $this->funcoes->formataValorDb($_POST['ContaReceber']['valor']);
            $_POST['ContaReceber']['data'] = $this->funcoes->FormataData($_POST['ContaReceber']['data']);
            if ($this->objModel->update($_POST['ContaReceber'], $_POST['ContaReceber']['id'])) {
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
}