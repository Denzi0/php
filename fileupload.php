<?php
    //$fileupload = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    

    //echo (checkType($type)) ? "Valid" : "Invalid" ;
    // echo (checkSize($size)) ? "Valid" : "Invalid" ;
    if(checkType($type) && checkSize($size)){ //rearrayfiles($fileupload)
       // $fileupload = rearrayfiles($)
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
            'png'
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
    // function rearrayfiles($fileupload){
    //     global $fileupload;
    //     $file_ary = array();
    //     $file_count = count($fileupload['name']);
    //     $file_keys = array_keys($fileupload);
    //     for ($i=0;$i<$file_count;$i++){
    //         foreach ($file_keys as $key){
    //             $file_ary[$i][$key] = $fileupload[$key][$i];
    //         }
    //     }
    //     return $file_ary;
    // }

    function upload($file = null){
        $destination = 'fileupload/'.basename($file["name"]);
        return move_uploaded_file($file['tmp_name'], $destination);
    }
  
    include('uploadindex.php');
?>