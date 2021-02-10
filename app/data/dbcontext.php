<?php 

class dbContext{

    public $host;
    public $username;
    public $password;
    public $database;

    //host
    function setHost($host){

        $this->host = $host;
    }

    function getHost(){

       return $this->host;
    }

    //username
    function setUsername($username){

        $this->username = $username;
    }

    function getUsername(){

       return $this->username;
    }

        //password
        function setPassword($password){

            $this->password = $password;
        }
    
        function getPassword(){
    
           return $this->password;
        }

        //database
        function setDatabase($database){

            $this->database = $database;
        }
    
        function getDatabase(){
    
           return $this->database;
        }


}

$dbCon = new dbContext();
$dbCon->setHost("localhost");
$dbCon->setUsername("root");
$dbCon->setPassword("p@ssword");
$dbCon->setDatabase("vcsdb");


?>