<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:57
 */

namespace Controller;


class ContasPagarController
{

    private $content;

    /**
     * ContasPagarController constructor.
     * @param $content
     */
    public function __construct()
    {
        $this->content = "Contas a Pagar";
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }




}