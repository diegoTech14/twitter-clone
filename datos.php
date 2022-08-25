<?php 

    include('userByNickName.php');
    
    $nickname = $_POST['nickname'];
    echo json_encode(userDataByNickName($nickname));

?>