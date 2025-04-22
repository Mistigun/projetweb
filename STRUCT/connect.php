<?php

define('SERVER','mysql:server=localhost;dbname=efreitchop');
define('USER','root');
define('PASS','');

try{
    $auth = new PDO(SERVER,USER,PASS);
} CATCH (Exception $e){
    echo $e->getMessage();
}