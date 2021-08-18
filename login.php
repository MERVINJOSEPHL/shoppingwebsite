<?php
$name=$_POST["username"];
$password=$_POST["password"];
$user=array("mervin");
$users=array("mervin"=>"a");
function enter($name,$password,$users){
    if($password==$users[$name]){
        
        include"frame3.html";
    }
    elseif($password!=$users[$name]){
    echo "wrong password";
    }
    else{
    echo "user name does not exsist";
    }}
 if (in_array($name,$user)){   
    enter($name,$password,$users);
 }
 else{
     echo"<center><h1>ask admin to allow you </h1></center>";
 }
?>