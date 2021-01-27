<?php
class Controller_Profile extends Controller
{
    function __construct()
    {
        $this->model = new Model_Profile();
        $this->view = new View();
    }
    function action_index()
    {
        $result = parent::action_index();
        $data = '';
        $content = array(
            "nav" => $this->nav,
            "body" => 'profile_view.php');
        if (!$result["isAuth"]){
            $content["body"]='error_log_view.php';
            $data=$this->model->get_error();
        }
        else{
            $data =$this->model->get_data();
        }

        if ($data!=false){
            $this->view->generate($content, 'template_view.php',$data);
        }
        else{
            header("Location: /error");
            exit();
        }
    }
}