<?php

class Load {

    //Import variables and display a view
    function view($file_name, $data = null) {
        if (is_array($data)){
            extract($data);
        }

        include $file_name . '.php';
    }
}

?>