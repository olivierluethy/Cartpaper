DROP DATABASE IF EXISTS cartpaper;
CREATE DATABASE cartpaper;
USE cartpaper;

--
-- Tabelle 'Users'
--

CREATE TABLE users (
  userId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL UNIQUE,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  description VARCHAR(255),
  imageType varchar(255) NOT NULL,
  imageData longblob NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

--
-- Tabelle 'Books'
--

CREATE TABLE books (
  bookId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  titel VARCHAR(100) NOT NULL,
  zusammenfassung VARCHAR(255) NOT NULL,
  datum DATE NOT NULL,
  fk_userId INT NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (fk_userId) REFERENCES users(userId)
);

/* Beispiel Daten */
INSERT INTO `users` (`userId`, `username`, `email`, `password`, `description`, `imageType`, `imageData`, `created_at`) VALUES
(1, 'LE FOU', 'olivier@kauz.ch', '$2y$10$LbYMnWuawyliVSj64qarwudXRWDLy1HvjN4udgbHBszHZXcmetU5m', NULL, '', '', '2022-08-05 13:54:26'), /* Passwort: kauz.git */
(2, 'TestFaktor', 'test@test.ch', '$2y$10$LbYMnWuawyliVSj64qarwudXRWDLy1HvjN4udgbHBszHZXcmetU5m', NULL, '', '', '2022-08-05 13:55:59');