<?php


class Model_News extends model
{
    public function get_data()
    {
        $pdo=parent::get_data();
        $stmt = $pdo->query('SELECT num,date,views,title,lemma,img FROM `news`');
        $data_news =$stmt->fetchAll();
        $data = array(
            "news"=>$data_news
        );
        return $data;
    }

}
