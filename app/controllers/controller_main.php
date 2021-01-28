<?php

class Controller_Main extends Controller
{
    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index()
    {
        $result = parent::action_index();
        $content = array(
            "nav" => $this->nav,
            "body" => 'main_view.php');

        $data = $this->model->get_data();

        $this->view->generate($content, 'template_view.php', $data);
    }
}