<?php
class crud
{
    public $hostname;
    public $username;
    public $password;
    public $dbname;
    public $con;
    public function __construct($hostname, $username, $password, $dbname)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->con = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        if ($this->con) {
            echo "connect";
        }
    }
}
