<?php
function escape($data) {
    if($data !== null) {
        $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
        $data = trim($data);
        $data = stripslashes($data);
        return ($data);
    }
    else {
        return null;
    }
}

