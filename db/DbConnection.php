<?php

namespace db\DbConnection;

class DbConnection
{
    protected $conn = null;

    public function OpenCon()
    {
        $this->conn = new mysqli(servername, username, password, dbname) or die($conn->connect_error);
        return $this->conn;
    }
    public function closeCon()
    {
        $this->conn->close();
    }
}

?>

