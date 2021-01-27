<?php
class Controller {

    public $model;
    public $view;
    protected $default_nav = 'template_nav_basic_view.php';
    protected $auth_nav = 'template_nav_auth_view.php';
    protected $nav;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
        $this->nav = $this->default_nav;
        $results = array(
            "isAuth"=>false,
            "isAdmin"=>false
        );
        //check auth
        if (isset($_COOKIE["id"]))
        {

            $results["isAuth"]=true;
            $results["isAdmin"]=(boolean)$_COOKIE["isAdmin"];
        }

        if ($results["isAuth"])
            $this->nav = $this->auth_nav;
        return $results;
    }


}