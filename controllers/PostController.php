<?php
class PostController {
    public function index() {
        $database = new Database();
        $db = $database->getConnection();
        $postModel = new Post($db);
        $posts = $postModel->getAll();
        
        // Load view
        require_once '../views/posts/index.php';
    }

    public function show($id) {
        $database = new Database();
        $db = $database->getConnection();
        $postModel = new Post($db);
        $post = $postModel->findById($id);

        if(!$post) {
            echo "Post no encontrado";
            return;
        }

        require_once '../views/posts/show.php';
    }
}
