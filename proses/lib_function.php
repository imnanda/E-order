<?php
function cek_login(){
    $telahlogin=$_SESSION['sudahlogin'];// untuk sementara
    if($telahlogin==false)
    {
        header("Location:../login.php");
    }

    else
        header("Location:../index.php");
}
function koneksi_db(){
    $host = "localhost";
    $database = "db_eorder";
    $user = "root";
    $password = "asdasd150494";
    $link=mysql_connect($host,$user,$password);
    mysql_select_db($database,$link);
    if(!$link)
        echo "Error : ".mysql_error();
    return $link;
}