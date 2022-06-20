<?php
ob_start();
session_start();
require 'baqlan.php';

if(isset($_POST['kayit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_again=@$_POST['password_again'];

    if(!$username){
        echo "Xahiş olunur istifadəçi adın daxil edin";

    } elseif(!$password || !$password_again){
        echo "Xahiş olunur şifrənizi yazın";
    } elseif($password != $password_again){
        echo "Yazdığınız şifrələr eyni deyil";
    } else{
        //veritabani islemi
        $sorgu=$db->prepare('INSERT INTO users SET user_name=?,user_password=?');
        $ekle=$sorgu->execute([
            $username,$password
        ]);
        if($ekle){
            echo "Təbriklər qeydiyyatdan keçdiz";
            header('Refresh:2; index.php');
        }else{
            echo "Xəta baş verdi yenidən cəhd edin";
        }
    }
}

if(isset($_POST['giris'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(!$username){
        echo "İstifadəçi adınızı daxil edin";

    } elseif(!$password){
        echo "Şifrənizi daxil edin";

    } else{
        $kullanici_sor=$db->prepare('SELECT * FROM users WHERE user_name=? || user_password=?');
        $kullanici_sor->execute([
            $username,$password
        ]);

         $say=$kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['username']=$username;
            echo "Uğurlu giriş";
            header('Refresh:2;index.php');
        }else{
            echo "Xəta! Yenidən cəhd edin ";
        }


    }
}


?>