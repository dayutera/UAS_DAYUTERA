<?php

function createDB()
{
    $conn = mysqli_connect("localhost", "root", "", null, 3306);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS peagent CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully" . PHP_EOL;
    } else {
        echo "Error creating database: " . mysqli_error($conn) . PHP_EOL;
    }

    mysqli_close($conn);
}

function dbCOn()
{
    $db = require_once "conn.php";
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function createpeagent($db)
{
    mysqli_query($db, "DROP TABLE IF EXISTS `tb_peagent`;");
    $sql = <<<SQL
    CREATE TABLE `tb_peagent` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `umur` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `hobi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `tinggi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Table peagent created successfully" . PHP_EOL;
    } else {
        echo "Error creating table peagent: " . mysqli_error($db) . PHP_EOL;
    }
}


createDB();
$db = dbCOn();
createpeagent($db);
