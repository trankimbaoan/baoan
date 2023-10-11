<?php

include './Dbconfig.php';

class Mysql extends Dbconfig {

    public $connectionString;
    public $dataSet;
    private $sqlQuery;
    
    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;

    function Mysql() {
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;

        $dbPara = new Dbconfig();
        $this->databaseName = $dbPara->dbName;
        $this->hostName = $dbPara -> serverName;
        $this -> userName = $dbPara -> userName;
        $this -> passCode = $dbPara ->passCode;
        $dbPara = NULL;
    }
  
    function dbConnect(){
        $this -> connectionString = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($this -> connectionString, 'demo');
        return $this -> connectionString;
    }

    function dbDisconnect() {
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;
        $this -> databaseName = NULL;
        $this -> hostName = NULL;
        $this -> userName = NULL;
        $this -> passCode = NULL;
    }

    function selectAll($tableName)  {
        $this->sqlQuery = 'SELECT * FROM ' . $tableName;
        $this ->dataSet = mysqli_query($this->connectionString, $this->sqlQuery);
        return $this->dataSet;
    }

    function insertProduct($tableName)  {
        $this->sqlQuery = 'SELECT * FROM ' . $tableName;
        $this ->dataSet = mysqli_query($this->connectionString, $this->sqlQuery);
        return $this->dataSet;
    }
   
}
?>