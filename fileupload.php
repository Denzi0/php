<?php
    include('success.php');
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    //echo (checkType($type)) ? "Valid" : "Invalid" ;
    // echo (checkSize($size)) ? "Valid" : "Invalid" ;
    if(checkType($type) && checkSize($size)){
        if(upload($_FILES['file'])){
            echo "Sucessfully Uploaded! <br>";
        }else{
            echo "Failed to Upload";
        }
    }

    function checkType($type = null){
        $allowed = array(
            'jpeg',
            'jpg',
            'png',
            'gif'   
        );

        if($type){
            $strArray = explode('/',$type);
            return in_array(end($strArray), $allowed);
        }
    }

    function checkSize($size = null){
        $max = 500000; // 5mb
        if($size){
            return $size <= $max;
        }
    }

    function upload($file = null){
        $destination = 'fileupload/'.basename($file["name"]);
        return move_uploaded_file($file['tmp_name'], $destination);
    }
?>