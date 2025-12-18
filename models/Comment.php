<?php
class Comment {
    private $conn;
    private $table = 'comments';

    public function __construct($db) {
        $this->conn = $db;
    }

    // Required for MVC completeness, though maybe not used in first delivery views yet
    public function getByPostId($postId) {
        $query = "SELECT c.*, u.username 
                  FROM " . $this->table . " c
                  LEFT JOIN users u ON c.user_id = u.id
                  WHERE c.post_id = ?
                  ORDER BY c.created_at ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$postId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
