<?php

class Controller_Error extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
        $result = parent::action_index();
        $content = array(
            "nav" => $this->nav,
            "body" => 'error_log_view.php');

        $data = array("errortext" => "Ошибка 404 - страница не найдена.");

        $this->view->generate($content, 'template_view.php', $data);
    }
}
