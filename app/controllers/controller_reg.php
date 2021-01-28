<?php
class Controller_Reg extends Controller
{
    function __construct()
    {
        $this->model = new Model_Reg();
        $this->view = new View();
    }
    function action_index()
    {
        if (empty($_COOKIE["id"])){
            $result = parent::action_index();
            $content = array(
                "nav" => $this->nav,
                "body" => 'reg_view.php');
            $data = $this->model->get_data();
            $this->view->generate($content, 'template_view.php',$data);
        }
        else
        {
            header("Location: /error");
            exit();
        }
    }
    function action_validate()
    {
        if (empty($_COOKIE["id"])){
            $result = $this->model->validate();
            header($result);
            exit();
        }
        else
        {
            header("Location: /error");
            exit();
        }

    }
}
