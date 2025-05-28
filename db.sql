CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    level TINYINT(1) NOT NULL COMMENT '0 = admin, 1 = user'
);

INSERT INTO users (username, password, level) VALUES
('admin', MD5('admin123'), 0),
('user', MD5('user123'), 1);
