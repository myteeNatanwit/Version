<?php
$appname =$_GET["appname"] ;
$version="";
$array = array( 
    'myteezine' => '1.5.0',
    'dormez' => '1.2.4',
    'ozweather' => '1.4.7',
    '1001jokes' => '1.2.1',
    '1001jokeslite' => '1.1.2',
    'namgiao' => '1.4.7',
    'airnav' => '1.6.8',
    'apptrans' =>  '1.0.5',
    'exrate' => '3.5.2',
    'whereRU' => '3.2.7',
    'coffeebook' => '4.3.3',
    'baristapro' => '1.0.6');

echo "$array[$appname]";

?>