<?php
function is_username_valid($username){
    $condition = preg_match('/^[a-z0-9]{5,9}$/',$username);
    if ($condition)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function is_password_valid($password){
    $condition = preg_match('/^.(?=.*#)(?=.*[!@#$%^&*()]).{8,}$/i',$password);
    if ($condition)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function is_phone_valid($phone){
    $condition = preg_match('/^[+]62.*.{8,15}$/i',$phone);
    if ($condition)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function is_email_valid($email){
    $condition = preg_match('/^.{1,}[@].{2,}\..{2,}$/i',$email);
    if ($condition)
    {
        return true;
    }
    else
    {
        return false;
    }
}
var_export(is_username_valid('zeronull'));
var_export(is_username_valid('userOke'));
var_export(is_password_valid('p@ssW0rd#'));
var_export(is_password_valid('C0d3YourFuture!@'));
var_export(is_phone_valid('+6281234567890'));
var_export(is_email_valid('iqbal@mail.c'));
?>  