<?php
namespace lib\validation;
class validation 
{
    private $value ; 
    private $email ; 
    private $input;
    private $error = []; 
    // return input values 
    public function input($name){
        $this->input = $name;
        $this->value=$_REQUEST['name'];
        $this->email=$_REQUEST['email'];
        return $this;
    }

    // if empty or length is kaza or kaza 
    public function required(){
        if(empty($this->value) || strlen($this->value) == 0 || $this->value =='') {
            $this->error[$this->input] = "this input : ($this->input) -- is required";
        }
        return $this;

    }

    public function min($min){
        if(strlen($this->value)<=$min) {
            $this->error[$this->input] = "this input : ($this->input) -- is min length";
        }
        return $this ;
    }

    public function max($max){
        if(strlen($this->value)<=$min) {
            $this->error[$this->input] = "this input : ($this->input) -- is max length";
        }
        return $this ;
    }

    public function email(){
        if(!filter_var($this->email ,FILTER_VALIDATE_EMAIL)) {
            $this->error[$this->input] = "this input : ($this->input) -- must be email format";
        }
        return $this ;
    }



    public function showError(){
        $msg='<ul> <div class="alert alert-danger" role="alert">';
        foreach ($this->error as $error){
            $msg.= "<li>$error</li>";
        }
        $msg.='</ul></div> ';
        echo $msg;
    }

    public function is_error() {
        return (count($this->error)>0) ? true : 0;
    }

}