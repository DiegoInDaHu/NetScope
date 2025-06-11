-- SQL schema for NetScope example application
-- Run this script to create the `users` table

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `contrasena` VARCHAR(255) NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create default admin user
INSERT INTO `users` (`nombre`, `contrasena`, `created_at`, `updated_at`)
VALUES ('admin', '$2y$10$YkeQuYaAzQBeT78eigFaGuSkPH8lSVyzTWNDkD3jZgcLAUUvSd/qC', NOW(), NOW());
