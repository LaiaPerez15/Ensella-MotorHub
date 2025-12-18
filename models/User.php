<?php
class User {
    private $conn;
    private $table = 'users';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($username, $email, $password) {
        $query = "INSERT INTO " . $this->table . " (username, email, password_hash) VALUES (:username, :email, :password)";
        $stmt = $this->conn->prepare($query);
        
        // Clean data
        $username = htmlspecialchars(strip_tags($username));
        $email = htmlspecialchars(strip_tags($email));
        
        // Hash password
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_hash);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login($email, $password) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if(password_verify($password, $row['password_hash'])) {
                return $row;
            }
        }
        return false;
    }
}
