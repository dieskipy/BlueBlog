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
        if (empty($_COOKIE["id"])) {
            parent::action_index();
            $data = $this->model->get_data();

            $content = array(
                "nav" => $this->nav,
                "body" => 'auth_view.php');

            $this->view->generate($content, 'template_view.php', $data);
        } else {
            header("Location: /error");
            exit();
        }

    }

    function action_login()
    {
        if (empty($_COOKIE["id"])) {
            $result = $this->model->login();
            header($result);
            exit();
        } else {
            header("Location: /error");
            exit();
        }

    }

    function action_logout()
    {
        if (empty($_COOKIE["id"])) {
            header("Location: /error");
            exit();
        } else {
            setcookie("id", "", 0, '/');
            setcookie("isAdmin", "", 0, '/');
            header("Location: /");
            exit();
        }

    }
}
