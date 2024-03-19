<?php

namespace src;

class Clean
{
function clean_input($data){
    if($data != null){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data,ENT_QUOTES|ENT_SUBSTITUTE,"UTF-8");
        return $data;
    }
    else
        return null;

}
}