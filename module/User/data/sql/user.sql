CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) unsigned NOT NULL auto_increment,
    `username` varchar(255) NOT NULL,
    `emai` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `picture` varchar(255) NOT NULL,
    `dob` date NOT NULL,
    `role_id` int(11) unsigned NOT NULL,
    `enabled` tinyint(1) NOT NULL DEFAULT `1`,
    `created` datetime NOT NULL,
    `updated` datetime NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY (`username`),
    UNIQUE KEY (`email`),
    KEY `role_id` (`role_id`),
    KEY `enabled` (`enabled`),
    KEY `created` (`created`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;