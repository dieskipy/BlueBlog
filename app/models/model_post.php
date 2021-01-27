<?php
class Model_Post extends model
{
    public function get_param_data($param)
    {
        $pdo=parent::get_data();
        $stmt = $pdo->prepare('SELECT date,views,title,text,img,num,lemma FROM `news` WHERE num=:num');
        $stmt->bindParam(':num', $param, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_LAZY);
        return $data;
    }
    public function get_error()
    {
        $data = array(
            "errortext"=>"Данный функционал доступен только администраторам блога."
        );
        if ($_COOKIE["id"]==null){
            $data = array(
                "errortext"=>"К сожалению, вы являетесь неавторизованным пользователем, и потому не можете просматривать новости. Пожалуйста, авторизуйтесь или зарегистрируйтесь, если вы здесь в первый раз :)"
            );
        }

        return $data;
    }
    public function update_views($param)
    {
        $pdo=parent::get_data();
        $stmt = $pdo->prepare('SELECT views FROM `news` WHERE num=:num');
        $stmt->bindParam(':num', $param, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_LAZY);
        $views = $data["views"];
        ++$views;
        $stmt = $pdo->prepare('UPDATE `news` SET views=:views WHERE num=:num');
        $stmt->bindParam(':views', $views, PDO::PARAM_INT);
        $stmt->bindParam(':num', $param, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function update_post($param)
    {
        $pdo=parent::get_data();
        $stmt = $pdo->prepare('UPDATE `news` SET title=:title,lemma=:lemma,text=:text WHERE num=:num');
        $stmt->bindParam(':num', $param, PDO::PARAM_INT);
        $stmt->bindParam(':title', $_POST["title"], PDO::PARAM_STR, 100);
        $stmt->bindParam(':lemma', $_POST["lemma"], PDO::PARAM_STR, 140);
        $stmt->bindParam(':text', $_POST["text"], PDO::PARAM_STR, 1000);
        $stmt->execute();
    }


}