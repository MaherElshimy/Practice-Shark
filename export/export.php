<?php


class Export {
    public function __construct($file, $type) {
        $type = new $type ; 
        echo $type->getfile();
    }
}
?>