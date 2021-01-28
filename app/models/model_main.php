<?php


class Model_Main extends model
{
    public function get_data()
    {
        $pdo = parent::get_data();
        $stmt = $pdo->query('SELECT img FROM `news` WHERE `isFit` = 1');
        $data_img = $stmt->fetchAll();
        $stmt = $pdo->query('SELECT num,date,views,title,lemma,img FROM `news`');
        $data_news = $stmt->fetchAll();
        $data = array(
            "img" => $data_img,
            "news" => $data_news
        );
        return $data;
    }

}