<?php

class Util {

    public static function compacter($str){
        $x = 200;
        if(substr($str, $x, 1) === " "){
            return substr($str, 0, $x)." ...";
        }else{
            while(substr($str, $x, 1) !== " "){
                $x--;
            }
            return substr($str, 0, $x)." ...";
        }
    }

    public static function getDataURI($img){
        $imageData = base64_encode(file_get_contents($img));
        $src = 'data:'.mime_content_type($img).';base64,'.$imageData;
        return $src;
    }

} 