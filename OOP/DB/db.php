<?php

class db{

    public $sql;
    public $connection;

    public function __construct() {
        $this->connection = mysqli_connect(
        "localhost",
        "root",
        "" , 
        "shark management"
    );
    }

    
    public function select($table, $column) {
        $this->sql = "SELECT $column FROM `$table` " ;
        return $this;
    } 

    
    public function insert($table, $data) {
        $column = '' ;
        $values = '' ;
        foreach ($data as $key => $value) {
            $column .=" `$key`," ;
            $values .=" '$value'," ;
        }

        $column = rtrim($column,',');
        $values = rtrim($values,',');

        $this->sql = "INSERT INTO `$table` ($column) VALUES ($values) " ;
        return $this;
    } 


    public function update($table, $data) {
        $row = '' ;
        foreach ($data as $key => $value) {
            $row .=" `$key` = '$value'," ;
        }
        $row = rtrim($row,',');

        $this->sql = "UPDATE `$table` SET $row" ;
        return $this ;
    }

    public function where($key , $operator , $value){
        $this->sql .= " WHERE `$key` $operator $value";
        return $this;
        
    }

    public function get(){
        $q = mysqli_query($this->connection , $this->sql);
        return mysqli_fetch_all($q , 1);
    }
    
    public function first(){
        $q = mysqli_query($this->connection , $this->sql);
        return mysqli_fetch_ASSOC($q);
    }
    
    public function delete($table){
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }
    
    public function execute(){
        mysqli_query($this->connection , $this->sql);
        return mysqli_affected_rows($this->connection);
    }
}


$db = new db() ; 
$data = ['name' => 'Mostafa'];
echo "<pre>";
$db->update('student',$data)->where('id','=','12')->execute();
echo "</pre>";





?>