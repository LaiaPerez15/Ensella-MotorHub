<?php
class UserController {
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $database = new Database();
            $db = $database->getConnection();
            $userModel = new User($db);

            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $userModel->login($email, $password);

            if ($user) {
                // In a real app we would set the session here
                // session_start();
                // $_SESSION['user_id'] = $user['id'];
                echo "Login exitoso. Bienvenido " . $user['username'];
                // header("Location: /motorhub/public/");
            } else {
                echo "Credenciales incorrectas";
            }
        } else {
            require_once '../views/auth/login.php';
        }
    }

    public function register() {
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $database = new Database();
            $db = $database->getConnection();
            $userModel = new User($db);

            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if($userModel->register($username, $email, $password)) {
                echo "Registro completado. <a href='index.php?url=login'>Inicia sesión</a>";
            } else {
                echo "Error en el registro.";
            }
         } else {
             require_once '../views/auth/register.php';
         }
    }

    public function logout() {
        // session_start();
        // session_destroy();
        header("Location: index.php");
    }
}
