<?php
class Post {
    private $conn;
    private $table = 'posts';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT p.*, c.name as category_name, u.username 
                  FROM " . $this->table . " p
                  LEFT JOIN categories c ON p.category_id = c.id
                  LEFT JOIN users u ON p.user_id = u.id
                  ORDER BY p.created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $query = "SELECT p.*, c.name as category_name, u.username 
                  FROM " . $this->table . " p
                  LEFT JOIN categories c ON p.category_id = c.id
                  LEFT JOIN users u ON p.user_id = u.id
                  WHERE p.id = ? 
                  LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
