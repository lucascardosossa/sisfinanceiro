<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:57
 */

namespace Controller;


class ContasReceberController
{


    private $content;

    /**
     * ContasReceberController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = file_get_contents("View/contas_receber/" . $content . ".php");
    }

    public function index()
    {
        $this->setContent('index');
        return $this->getContent();
    }

    public function create($params)
    {
        if ($params['action'] == 'insert_ctreceber') {
            var_dump($params);
        } else {
            $this->setContent('form');
            return $this->getContent();
        }

    }
}