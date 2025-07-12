<?php
namespace Core;

class Validator{
    public function string($value){
        return strlen(trim($value) === 0);
    }

    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}