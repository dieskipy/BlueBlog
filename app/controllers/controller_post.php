<?php
class Controller_Post extends Controller
{
    function __construct()
    {
        $this->model = new Model_Post();
        $this->view = new View();
    }
    function action_get_post($post)
    {
        $result = parent::action_index();
        $content = array(
            "nav" => $this->nav,
            "body" => 'post_view.php');
        if (!$result["isAuth"]){
            $content["body"]='error_log_view.php';
            $data=$this->model->get_error();
        }
        else{
            $data =$this->model->get_param_data($post);
            if(!$result["isAdmin"])
                $this->model->update_views($post);
        }
        if ($data!=false){
            $this->view->generate($content, 'template_view.php',$data, $result["isAdmin"]);
        }
        else{
            header("Location: /error");
            exit();
        }

    }
    function action_edit_post($post)
    {
        $result = parent::action_index();
        $content = array(
            "nav" => $this->nav,
            "body" => 'post_edit_view.php');
        if (!$result["isAdmin"]){
            $content["body"]='error_log_view.php';
            $data=$this->model->get_error();
        }
        else{
            $data =$this->model->get_param_data($post);
        }
        if ($data!=false){
            $this->view->generate($content, 'template_view.php',$data);
        }
        else{
            header("Location: /error");
            exit();
        }
    }

    function action_update_post($post)
    {
        $result = parent::action_index();

        if (!$result["isAdmin"]){
            $content = array(
                "nav" => $this->nav,
                "body" => 'error_log_view.php');
            $data=$this->model->get_error();
            $this->view->generate($content, 'template_view.php',$data);
        }
        else{
            $this->model->update_post($post);
            header('Location: /post?'.$post.'/get_post');
            exit();
        }

    }
}