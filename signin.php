<?php
    session_start();
    
    include('connection.php');
    include('userByNickname.php');


    //replicar la búsqueda de perfiles, pero al iniciar sesión con ese perfil
    
    function signin($email, $password){
        global $connection;

        $data = array();
        if($result = $connection -> query("SELECT idUser, nickname FROM users WHERE email = '$email' AND
        password = '$password'")){

            if($result -> num_rows != 0){
                $row = $result -> fetch_array();

                $_SESSION["id"] = $row[0];
                $_SESSION["nickname"] = $row[1];

                $dataUser = userDataByNickName($_SESSION['nickname']);
                //header("Location:profile.php");
                var_dump($dataUser);
                return $dataUser;
            }
        }
        return false;
    }

    if(isset($_POST['email']) and isset($_POST['password'])){
        signin($_POST['email'], $_POST['password']);
    }
?>