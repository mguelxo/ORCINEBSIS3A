CREATE DATABASE IF NOT EXISTS `bsis3a` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bsis3a`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `StudentID` int DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`username`, `password`, `StudentID`) VALUES
('admin', '$2y$12$50KMI.fzXXxn.gg25n5XguF15o5u9XhaNIE2zefTZ8ccgyfCabHsm', 1),
('mguel@gmail.com', '$2y$10$1C7BPhSeGDNy02Q9iuoo3uCYHUTmFd4Smy/fXctt5v1cBCpq/df7G', 666)
ON DUPLICATE KEY UPDATE
    `password` = VALUES(`password`),
    `StudentID` = VALUES(`StudentID`);
