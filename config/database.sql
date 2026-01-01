
CREATE DATABASE IF NOT EXISTS photosphere;
USE photosphere;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,

    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,

    role ENUM('basic', 'pro', 'moderator', 'admin') NOT NULL DEFAULT 'basic',

    bio TEXT DEFAULT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,

    is_active BOOLEAN NOT NULL DEFAULT TRUE,

    monthly_uploads INT DEFAULT NULL,

    subscription_start DATETIME DEFAULT NULL,
    subscription_end DATETIME DEFAULT NULL,

    moderator_level VARCHAR(50) DEFAULT NULL,

    is_super_admin BOOLEAN DEFAULT NULL,

    last_login DATETIME DEFAULT NULL,

    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    deleted_at DATETIME DEFAULT NULL,

    INDEX idx_users_deleted_at (deleted_at)
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,

    title VARCHAR(200) NOT NULL,
    description TEXT DEFAULT NULL,

    file_path VARCHAR(255) NOT NULL,
    file_size INT NOT NULL,
    mime_type VARCHAR(50) NOT NULL,
    dimensions VARCHAR(20) DEFAULT NULL,

    status ENUM('draft', 'published', 'archived') NOT NULL DEFAULT 'draft',
    view_count INT NOT NULL DEFAULT 0,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    published_at DATETIME DEFAULT NULL,

    deleted_at DATETIME DEFAULT NULL,

    INDEX idx_posts_deleted_at (deleted_at),
    INDEX idx_posts_user (user_id),

    CONSTRAINT fk_posts_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE RESTRICT
);


CREATE TABLE albums (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,

    name VARCHAR(100) NOT NULL,
    description TEXT DEFAULT NULL,

    cover_photo_id INT DEFAULT NULL,
    is_private BOOLEAN NOT NULL DEFAULT FALSE,
    photo_count INT NOT NULL DEFAULT 0,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    deleted_at DATETIME DEFAULT NULL,

    UNIQUE (user_id, name),
    INDEX idx_albums_deleted_at (deleted_at),

    CONSTRAINT fk_albums_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE RESTRICT,

    CONSTRAINT fk_albums_cover
        FOREIGN KEY (cover_photo_id)
        REFERENCES posts(id)
        ON DELETE SET NULL
);


CREATE TABLE album_posts (
    album_id INT NOT NULL,
    post_id INT NOT NULL,

    PRIMARY KEY (album_id, post_id),

    CONSTRAINT fk_album_posts_album
        FOREIGN KEY (album_id)
        REFERENCES albums(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_album_posts_post
        FOREIGN KEY (post_id)
        REFERENCES posts(id)
        ON DELETE CASCADE
);


CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    slug VARCHAR(50) NOT NULL UNIQUE,
    usage_count INT NOT NULL DEFAULT 0
);


CREATE TABLE post_tags (
    post_id INT NOT NULL,
    tag_id INT NOT NULL,

    PRIMARY KEY (post_id, tag_id),

    CONSTRAINT fk_post_tags_post
        FOREIGN KEY (post_id)
        REFERENCES posts(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_post_tags_tag
        FOREIGN KEY (tag_id)
        REFERENCES tags(id)
        ON DELETE CASCADE
);


CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    post_id INT NOT NULL,
    parent_id INT DEFAULT NULL,

    content TEXT NOT NULL,
    is_edited BOOLEAN NOT NULL DEFAULT FALSE,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    deleted_at DATETIME DEFAULT NULL,

    INDEX idx_comments_deleted_at (deleted_at),
    INDEX idx_comments_post (post_id),

    CONSTRAINT fk_comments_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE RESTRICT,

    CONSTRAINT fk_comments_post
        FOREIGN KEY (post_id)
        REFERENCES posts(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_comments_parent
        FOREIGN KEY (parent_id)
        REFERENCES comments(id)
        ON DELETE CASCADE
);


CREATE TABLE likes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    post_id INT NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    UNIQUE (user_id, post_id),

    CONSTRAINT fk_likes_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE RESTRICT,

    CONSTRAINT fk_likes_post
        FOREIGN KEY (post_id)
        REFERENCES posts(id)
        ON DELETE CASCADE
);
