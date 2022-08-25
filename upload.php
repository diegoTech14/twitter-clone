<?php
    function uploadImage($file){

        $allowed_types = array("image/jpg", "image/jpeg", "image/png");

        if(in_array($file['type'], $allowed_types)){
            try{
                
                //creating the uploads directory
                if(!is_dir("uploads")){
                    mkdir("uploads", 0777);
                }
                
                //move to uploads directory
                move_uploaded_file($file['tmp_name'], "uploads/".$file['name']);
                    
                return 1;

            }catch(Exception $error){
                return $error -> getMessage();
            }
            
        }else{
            return 0;
        }
    }
?>