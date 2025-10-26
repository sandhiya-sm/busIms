<?php
/**
 * Database Connection Class
 * 
 * Handles database connections and queries
 */

class Database {
    private $connection;
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if ($this->connection->connect_error) {
            die('Connection Error: ' . $this->connection->connect_error);
        }

        // Set charset to utf8
        $this->connection->set_charset("utf8");
        
        return $this->connection;
    }

    public function query($sql) {
        $result = $this->connection->query($sql);
        return $result;
    }

    public function fetch_all($sql) {
        $result = $this->query($sql);
        $data = [];
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        
        return $data;
    }

    public function fetch_one($sql) {
        $result = $this->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        
        return null;
    }

    public function execute($sql) {
        if ($this->connection->query($sql) === TRUE) {
            return $this->connection->insert_id;
        } else {
            return false;
        }
    }

    public function get_error() {
        return $this->connection->error;
    }

    public function close() {
        $this->connection->close();
    }
}

// For backward compatibility with existing code
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$con) {
    die(mysqli_error($con));
}
?>