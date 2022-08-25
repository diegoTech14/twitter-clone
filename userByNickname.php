<?php
    include('connection.php');
    
    function userDataByNickName($nickname){
        global $connection;

        $data = array();
        if($result = $connection -> query("SELECT * FROM users WHERE nickname = '$nickname'")){
            $row = $result -> fetch_array();
            $data[0] = $row;
            $data[1] = tweetsByNickName($nickname);
        }
        return $data;
    }

    function tweetsByNickName($nickname){
        global $connection;

        if($result = $connection -> query("SELECT tweets.text, tweets.multimediaContent FROM users INNER JOIN tweets
        ON users.idUser = tweets.idUserPublication WHERE users.nickname = '$nickname'")){
            $row = $result -> fetch_all();
            return $row;
        }
    }

?>