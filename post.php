<?php
    include_once('validation.php');
    
    $fullname = $_POST["name"];
    $lastname = $_POST["last"];
    $middlename = $_POST["middle"];

    $email = $_POST["mail"];

    $place = $_POST["birth"];
    $address = $_POST["add"];

    $date = $_POST["date"];
    $mobilenum = $_POST['contact'];
    $gender = $_POST["gender"];
    $schooldate = $_POST["school_years"];
    $guardian = $_POST["guardian"];
    $coursename = $_POST["course"];
    $civilstatus = $_POST["civil"];

    $names = $fullname = $lastname;


    if(validateAddress($address) == FALSE){
        echo "NOT VALID ADDRESS " ."<br>" ;
    }

    if(validatemiddle($middlename) == FALSE){
        echo "NOT VALID MIDDLE NAME " ."<br>" ;
    }


    if(validateplace($place) == FALSE){
        echo "NOT VALID PLACE OF BIRTH " ."<br>" ;
    }
    if(validatemobilenumber($mobilenum) == FALSE){
        echo "NOT VALID CONTACT NUMBER " ."<br>"; 
    } 
    //
    if(validatedate($date) == FALSE){
        echo "NOT VALID DATE OF BIRTH" ."<br>";
    }
    if(validateschoolfunc($schooldate) == FALSE){
        echo "NOT VALID SCHOOL DATE" ."<br>";
    }

    if(validateguardian($guardian) == FALSE){
        echo "NOT VALID GUARDIAN" ."<br>";
    }
    //

    if(validatemail($email) == FALSE){
        echo "NOT VALID EMAIL" ."<br>";
    }
    if(validate($names) == FALSE){
        echo "INVALID NAMES" ."<br>";
    }
    if(validatecivil($civilstatus) == FALSE){
        echo "NOT VALID CIVIL STATUS" ."<br>";
    }
    


//
    if(validatemiddle($middlename) && validatecivil($civilstatus) && validateguardian($guardian) && validateschoolfunc($schooldate) && validatedate($date) && validate($names) &&validateAddress($address)&&validateplace($place) && validatemobilenumber($mobilenum) && validatemail($email)== TRUE){
        include_once("success.php");
    }


?>