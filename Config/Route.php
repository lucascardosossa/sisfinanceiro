<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 22:34
 */
include("Controller/ContasReceberController.php");
include("Controller/ContasPagarController.php");


Class Route
{

    private $route;
    private $conta_receber;
    private $conta_pagar;

    /**
     * Route constructor.
     */
    public function __construct()
    {
        $this->conta_receber = new Controller\ContasReceberController();
        $this->conta_pagar = new Controller\ContasPagarController();
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     */
    public function setRoute($route, $params)
    {
        switch ($route) {
            case 'ctreceber':
                $this->route = $this->conta_receber->index();
                break;
            case 'ctpagar':
                $this->route = $this->conta_pagar->getContent();
                break;
            case 'new_ctreceber':
            case 'insert_ctreceber':
                $this->route = $this->conta_receber->create($params);
                break;
        }
    }


}