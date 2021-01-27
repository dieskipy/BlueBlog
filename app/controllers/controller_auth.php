<?php
class Controller_Auth extends Controller
{
    function __construct()
    {
        $this->model = new Model_Auth();
        $this->view = new View();
    }
    function action_index()
    {
        parent::action_index();
        $data = $this->model->get_data();

        $content = array(
            "nav" => $this->nav,
            "body" => 'auth_view.php');

        $this->view->generate($content, 'template_view.php',$data);
    }
    function action_login()
    {
        $result = $this->model->login();
        header($result);
        exit();
    }
    function action_logout()
    {
        setcookie("id","",0,'/');
        setcookie("isAdmin","",0,'/');
        header("Location: /");
        exit();
    }
}
