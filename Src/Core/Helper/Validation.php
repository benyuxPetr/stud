<?php

namespace Src\Core\Helper;


class Validation
{
    public $patterns = array(
        'url'           => '[A-Za-z0-9-:.\/_?&=#]+',
        'words'         => '[\p{L}\s]+',
        'int'           => '[0-9]+',
        'date'          => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
        'email'         => '[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}',
        'group'         => '\w{3,5}'
    );

    public $errors = [];

    public $name;
    public $value;

    public function name($name){

        $this->name = $name;
        return $this;

    }

    public function value($value){

        $this->value = $value;
        return $this;

    }

    public function pattern($name){

        $regex = '/^('.$this->patterns[$name].')$/u';
        if(!preg_match($regex, $this->value)){
            $this->errors[] = 'Format '.$this->name.' not valid.';
        }

        return $this;

    }

    public function sex(){
        if($this->value != "M" && $this->value != "F"){
            $this->errors[] = 'Format '.$this->name.' not valid.';
        }
        return $this;
    }

    public function exam(){
        if((int)$this->value <= 0 || (int)$this->value > 1000){
            $this->errors[] = 'Format '.$this->name.' not valid.';
        }
        return $this;
    }

    public function resident(){
        if($this->value != "resident" && $this->value != ""){
            $this->errors[] = 'Format '.$this->name.' not valid.';
        }
        return $this;
    }

    public function isSuccess(){
        if(empty($this->errors)){
            return true;
        }
        return false;
    }

    public function getErrors(){
        if(!$this->isSuccess()){
            return $this->errors;
        }
        return false;
    }

}