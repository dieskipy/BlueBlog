<?php
class Model_Reg extends model
{
    public function get_data()
    {
        $data = $this->get_error();
        return $data;
    }
    public function get_error()
    {
        $error = "";
        if (isset($_COOKIE["goodReg"])){
            if($_COOKIE["goodReg"]=="false")
            {
                $error = "Профиль с такой почтой уже существует!";
            }
        }
        return $error;
    }

    public function validate()
    {
        $pdo=parent::get_data();
        $email = $_POST["email"];
        $stmt = $pdo->prepare('SELECT num FROM `user_database` WHERE email = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR,25);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_LAZY);
        $result='Location: /reg';
        if ($data!=false)
        {
            setcookie("goodReg",false,time()+60,'/');
        }
        else{
            $password = $_POST["password"];

            $stmt = $pdo->prepare('INSERT INTO `user_database`(`num`, `email`, `password`, `nickname`, `isAdmin`) VALUES (NULL,:email,:password,:nickname,0)');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR,25);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR,100);
            $stmt->bindParam(':nickname', $_POST["nickname"], PDO::PARAM_STR,10);
            $stmt->execute();
            $stmt = $pdo->prepare('SELECT num FROM `user_database` WHERE email = :email');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR,25);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_LAZY);

            setcookie("id",$data["num"],time()+60*60*24*30,'/');
            setcookie("isAdmin",0,time()+60*60*24*30,'/');
            setcookie("goodAuth",true,time()+60,'/');
            $result='Location: /';
        }
        return $result;
    }
}