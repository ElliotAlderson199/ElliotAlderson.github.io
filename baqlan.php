<?php

try{
    $db = new PDO("mysql:host=localhost; dbname=kayit2; charset=utf8", 'root','mirzali1604');
    //echo "Veritabani baqlantisi basarili";
}
catch(Exception $e){
    echo $e->getMesagge();
}




?>