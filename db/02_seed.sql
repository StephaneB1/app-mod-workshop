USE image_catalog;

-- Populate users table with an administrator and some regular users
INSERT INTO users (username, password, role) VALUES
('admin', '$2y$10$il9iJULRoOJWqY4L9PmOGeL32WJnLdPYWjtWtS3KnxWBXxWK6dQnG', 'admin'),  -- Password: admin123
('user1', '$2y$10$UE4I6iAbZ5KvadGShTJMcelhb9s5DC0drsjC4wElkcrRZf0.BUMgW', 'user'),   -- Password: user123
('user2', '$2y$10$hGhR9fA4Qb5v0dgVpfoLOuKz9EQxTwSjJvTWhVcwlTvc5K/kLpFdO', 'user');   -- Password: user123

-- Populate images table with some initial images
INSERT INTO images (user_id, filename, inappropriate) VALUES
(2, 'uploads/image1.png', 0),
(2, 'uploads/image2.png', 0),
(3, 'uploads/image3.png', 1),  -- Image flagged as inappropriate
(3, 'uploads/image4.png', 0);