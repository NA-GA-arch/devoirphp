<?php
    try{
        $f=fopen("t.txt","r+");
    }catch(exception $e){
        die("Un Erreur ".$e);
    }
    $arr=[]; $i=0;
    while($tmp=fgets($f))
        $arr[$i++]=explode(" | ",$tmp);
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';