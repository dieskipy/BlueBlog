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
        $result = parent::action_index();
        $content = array(
            "nav" => $this->nav,
            "body" => 'reg_view.php');
        $data = $this->model->get_data();
        $this->view->generate($content, 'template_view.php',$data);
    }
    function action_validate()
    {
        $result = $this->model->validate();
        header($result);
        exit();
    }
}
