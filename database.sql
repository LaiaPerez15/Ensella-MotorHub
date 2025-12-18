CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(80) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'writer', 'subscriber') DEFAULT 'subscriber',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    category_id INT NOT NULL,
    title VARCHAR(150) NOT NULL,
    content TEXT NOT NULL,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    user_id INT NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Seed Data
INSERT INTO categories (name) VALUES ('Eventos'), ('Talleres'), ('Marcas'), ('Blog'), ('Rutas');

INSERT INTO users (username, email, password_hash, role) VALUES 
('Admin', 'admin@motorhub.com', '$2y$10$EExk/dZk/dZk...', 'admin'),
('User1', 'user1@motorhub.com', '$2y$10$EExk/dZk/dZk...', 'writer');

INSERT INTO posts (user_id, category_id, title, content) VALUES 
(1, 1, 'Gran Ruta de Montaña', 'Quedada este domingo en la gasolinera norte para subir al puerto.'),
(1, 4, 'Nuevo Modelo Lanzado', 'La marca alemana presenta su nuevo deportivo.'),
(2, 3, 'Mi Proyecto JDM', 'Aquí tenéis fotos de mi restauración.');
