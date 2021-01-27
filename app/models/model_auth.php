<?php
class Model_Auth extends model
{
    public function get_data()
    {
        $data = $this->get_error();
        return $data;
    }
    public function get_error()
    {
        $error = "";
        if (isset($_COOKIE["goodAuth"])){
            if($_COOKIE["goodAuth"]=="false")
            {
                $error = "Неправильный логин или пароль";
            }
        }
        return $error;
    }

    public function login()
    {
        $pdo=parent::get_data();
        $stmt = $pdo->prepare('SELECT password, num, isAdmin FROM `user_database` WHERE email = :email');
        $stmt->bindParam(':email', $_POST["email"], PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_LAZY);
        $result='Location: /auth';
        if ($data!=false)
        {
            if((md5($_POST["password"])==$data["password"]))
            {
                setcookie("id",$data["num"],time()+60*60*24*30,'/');
                setcookie("isAdmin",$data["isAdmin"],time()+60*60*24*30,'/');
                setcookie("goodAuth",true,time()+60,'/');
                $result='Location: /';
            }
            else{
                setcookie("goodAuth",false,time()+60,'/');
            }

        }
        else{
            setcookie("goodAuth",false,time()+60,'/');
        }
        return $result;
    }

}