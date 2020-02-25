<?php
//Validation true tanan
function validate($names){
    return isEmpty($names) && checkname($names) && name($names);

}
function validatemail($email){
    return checkemail($email);
}

function validateplace($place){
    return place($place);   
}
function validateAddress($address){
    return Address($address);   
}
function validatemobilenumber($mobilenum){
    return mobilenumber($mobilenum);
}
function validatedate($date){
    return datefunc($date);
}
function validateschoolfunc($schooldate){
    return schoolfunc($schooldate);
}
function validateguardian($guardian){
    return guardianname($guardian);
}
function validatecivil($civilstatus){
    return civilstat($civilstatus);
}
function validatemiddle($middlename){
    return middlename($middlename);
}


//Matching of inputs
function middlename($middlename){
    if(strlen($middlename) == 1){
        return preg_match('/^[a-zA-Z]+$/', $middlename);
    }
}
function civilstat($civilstatus){
    if(strlen($civilstatus) > 2){
        return preg_match('/^[a-zA-Z]+$/', $civilstatus);
    }
}
function guardianname($guardian){
    if(strlen($guardian) > 2){
        return preg_match('/^[a-zA-Z]+$/', $guardian);
    }
}
function Address($address){
    if(strlen($address) > 2){
        return preg_match("/[^a-zA-Z0-9_-]/", $address);
    }
}
function place($place){
    if(strlen($place) > 2   ){
        return preg_match("/[^a-zA-Z0-9_-]/", $place);
    }
   
}

function isEmpty($names){
    return trim(strlen($names) > 0);
}

function checkname($names){
    return preg_match('/^[a-zA-Z]+$/', $names);
}
function checkemail($email){
    return preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/', $email);
}
function name($names){
    return strlen($names) >= 1;

}
function mobilenumber($mobilenum){
    return preg_match('/^(?:09|\+?63)(?!.*-.*-)(?:\d(?:-)?){9,10}$/m',$mobilenum);
}
//number
function datefunc($date){
    return preg_match('/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/',$date);
}
function schoolfunc($schooldate){
    return preg_match('/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/',$schooldate);
}



//date
//^(0[1-9]|[12]\d|3[01])\.(0[1-9]|1[012])\.((?:19|20)\d\d)$
// /([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/

///^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/

//number and letter
//preg_match("/^[a-zA-Z0-9]+$/", $value)
?>