<?php
class Model_Profile extends model
{
    public function get_data()
    {
        $pdo=parent::get_data();
        $stmt = $pdo->prepare('SELECT email,nickname,isAdmin FROM `user_database` WHERE num = :num');
        $stmt->bindParam(':num', $_COOKIE["id"], PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $role = $data["isAdmin"];
        if($role==1){
            $data["isAdmin"]="Администратор";
        }
        else {
            $data["isAdmin"]="Гость";
        }
        return $data;
    }
    public function get_error()
    {
        if ($_COOKIE["id"]==null){
            $data = array(
                "errortext"=>"К сожалению, вы являетесь неавторизованным пользователем, и потому не можете просматривать личную страницу. Пожалуйста, авторизуйтесь или зарегистрируйтесь, если вы здесь в первый раз :)"
            );
        }

        return $data;
    }

}