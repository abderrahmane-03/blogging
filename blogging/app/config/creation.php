<?php
require("config.php");

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME . ";
        USE " . DB_NAME . ";

        CREATE TABLE IF NOT EXISTS roles_d_utilisateur (
            role_ID INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL
        );

        CREATE TABLE IF NOT EXISTS Utilisateur (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(200),
            email VARCHAR(50),
            mot_de_pass VARCHAR(255),
            FOREIGN KEY (role_ID) REFERENCES roles_d_utilisateur(role_ID)
        );

        CREATE TABLE IF NOT EXISTS Article (
            article_ID INT AUTO_INCREMENT PRIMARY KEY,
            titre VARCHAR(200),
            contenu VARCHAR(255),
            date_de_publication VARCHAR(255)
        );

        CREATE TABLE IF NOT EXISTS Commentaires (
            comment_ID INT AUTO_INCREMENT PRIMARY KEY,
            contenu varchar(255),
            FOREIGN KEY (article_ID) REFERENCES Article(article_ID)
        );"

$pdo->exec($sql);
?>
