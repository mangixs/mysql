<?php
date_default_timezone_set("Asia/Shanghai");
class mysqli_use {
    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username   = $username;
        $this->password   = $password;
        $this->dbname     = $dbname;
        $this->db         = $this->mysqli_db();
    }
    private function mysqli_db() {
        $db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($db->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $db;
    }
    public function mysqli_select() {
        $sql = "SELECT * FROM tablename WHERE column = value";
        $ret = $this->db->query($sql);
        if (!$ret) {
            return "select error";
        }
        $result = mysqli_fetch_all($ret, MYSQLI_ASSOC);
        return $result;
    }
    public function mysqli_delete() {
        $sql = "DELETE FROM tablename WHERE column < value";
        $ret = $this->db->query($sql);
        if (!$ret) {
            return "delete error";
        }
        $this->close_db();
    }
    public function mysqli_insert() {
        $sql = "INSERT INTO tablename (column1, column2, column3,...) VALUE (value1, value2, value3,...)";
        $ret = $this->db->query($sql);
        if (!$ret) {
            return "insert error";
        }
        $id = mysql_insert_id();
        $this->close_db();
        return $id;
    }
    public function mysqli_update() {
        $sql = "UPDATE tablename SET column = value WHERE column = value";
        $ret = $this->db->query($sql);
        if (!$ret) {
            return "update error";
        }
        $this->close_db();
    }
    private function claose_db() {
        mysqli_close($this->db);
    }
}
?>