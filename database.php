<?php
        include('connection.php');
        include('upload.php');

        function allUsers(){
            global $connection;
            if($result = $connection -> query("SELECT * FROM users")){
                
                //we will get an assoc array from the row found
                $row = $result -> fetch_assoc();
            }
            $connection -> close();
        }




        function createUser(){
            global $connection;
            try{
                if(isset($_POST['name']) and isset($_POST['nickname']) and isset($_POST['email']) and isset($_POST['password']) and
                isset($_POST['dateOfBirthday'])){

                    $name = $_POST['name'];
                    $nickname = $_POST['nickname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $dateOfBirthday = $_POST['dateOfBirthday'];
                    $profileImageTMP = "";
                    $frontPageImageTMP = "";
    
                    if(isset($_FILES['profileImage']) and isset($_FILES['frontPageImage'])){
                        if(uploadImage($_FILES['profileImage']) == 1){
                            $profileImageTMP = "uploads/".$_FILES['profileImage']['name'];
                        }
    
                        if(uploadImage($_FILES['frontPageImage']) == 1){
                            $frontPageImageTMP = "uploads/".$_FILES['frontPageImage']['name'];
                        }
                    }
    
                    $connection -> query("INSERT INTO users (name, nickname, email, password, profilePhoto, frontPagePhoto, dateOfBirthday) VALUES ('$name', '$nickname', '$email',".
                    "'$password', '$profileImageTMP', '$frontPageImageTMP', '$dateOfBirthday')");
                    
                    }
                    
                }catch(Exception $error){
                    echo $error -> getMessage();
                }

        }

        createUser();
?>