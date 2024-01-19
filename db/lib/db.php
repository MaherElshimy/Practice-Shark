<?php

class db {
    private $db_list = [
        'mysql' ,
        'sql' ,
    ];
    public function __construct($provider , $method) {
        if ($this->support($provider)){
            (new $provider())->$method(); 
        } else {
            echo "Not Supported";
        }
    } 

    public function support($provider) {
        return in_array($provider, $this->db_list);
    }
}