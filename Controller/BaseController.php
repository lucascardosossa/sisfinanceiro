<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 21/07/17
 * Time: 19:51
 */

namespace Controller;


use Utilities\Funcoes;

class BaseController
{


    private $content;
    private $objFuncoes;

    /**
     * BaseController constructor.
     * @param $objFuncoes
     */
    public function __construct()
    {
        $this->objFuncoes = new Funcoes();
    }

    /**
     * @return Funcoes
     */
    public function getObjFuncoes()
    {
        return $this->objFuncoes;
    }

    /**
     * @param Funcoes $objFuncoes
     */
    public function setObjFuncoes($objFuncoes)
    {
        $this->objFuncoes = $objFuncoes;
    }


    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($view, $controller, $data = array())
    {

        $view = "View/" . $controller . "/" . $view . ".php";
        if (is_array($data) && !empty($data)) {
            extract($data);
        }
        ob_start();
        include $view;
        return ob_get_clean();

    }


}