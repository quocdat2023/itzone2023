<?php

class DB{

    public $con;
    protected $servername = "diemdanh.it-zone.club";
    protected $username = "itzonecl_diemdanh";
    protected $password = "diemdanhitzone";
    protected $dbname = "itzonecl_diemdanh";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

}

?>
