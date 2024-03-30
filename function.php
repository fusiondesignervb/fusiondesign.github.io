<?php 
// for any name ex.name,fullname,city-name

// for  only name
function onlyname($name) {
    $name = trim($name);
    if (!preg_match("/^[a-zA-Z]*$/", $name)) {
        return false;
    } else {
        return true;
    }
}

// for  Email address  
function email($email) {
    $email = trim($email);
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
        return false;
    } else {
        return true;
    }
}

// for  password 
function password($text) {
    $text = trim($text);
    if (!preg_match("/^[-a-zA-Z0-9+()'\"@\{8}\<>*&$#^'\/%?=_|!,.[^\r\n]*]*$/", $text)) {
        return false;
    } else {
        return true;
    }
}

//for  mobile no. 
function mobile_number($mob) {
    $mob = trim($mob);
    if (!preg_match("/^[0-9]{10}$/", $mob)) {
        return false;
    } else {
        return true;
    }
}




?>