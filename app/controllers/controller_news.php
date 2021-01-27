<?php
class Controller_News extends Controller
{
    function __construct()
    {
        $this->model = new Model_News();
        $this->view = new View();
    }
    function action_index()
    {
        $result = parent::action_index();
        $content = array(
            "nav" => $this->nav,
            "body" => 'news_view.php');

        $data =$this->model->get_data();

        $this->view->generate($content, 'template_view.php', $data);
    }
}
