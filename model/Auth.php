<?php
require_once __DIR__ . '/../config/database.php';

class Auth {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function login($username, $password) {
        $username = $this->db->real_escape_string($username);
        $password = md5($password); 

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $this->db->query($sql);

        if ($result && $result->num_rows === 1) {
            return $result->fetch_assoc();
        }

        return false;
    }
}
