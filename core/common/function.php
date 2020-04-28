<?php
function p($var){
    if(is_bool($var)){
        dump($var);
    }elseif (is_null($var)){
        dump(null);
    }else{
        dump($var);
    }
}
?>