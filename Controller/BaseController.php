<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 21/07/17
 * Time: 19:51
 */

namespace Controller;


class BaseController
{


    private $content;

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content, $controller, $data = array())
    {

        $view = "View/" . $controller . "/" . $content . ".php";
        if (is_array($data) && !empty($data)) {
            extract($data);
        }
        ob_start();
        include $view;
        return ob_get_clean();

    }


}