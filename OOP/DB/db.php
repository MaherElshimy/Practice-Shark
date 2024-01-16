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
echo "<pre>";
$db->delete('course')->where('id', '=' , 1)->execute();
echo "</pre>";

?>