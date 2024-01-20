<?php


class validation {
    public static function welcome() {
        echo "Welcome";
    }
    public function test() {
        self::welcome();
        echo "validation test";
    }


}