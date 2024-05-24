<?php

function dbCOn()
{
    $db = require_once "conn.php";
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function seedpeagent($db)
{
    $sql = <<<SQL
    INSERT INTO `tb_peagent` VALUES (1,'Yoga','21','Traveling','150cm',NOW(),NOW());
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Seeding peagent success" . PHP_EOL;
    } else {
        echo "Error seeding peagent : " . mysqli_error($db)  . PHP_EOL;
    }
}


$db = dbCOn();
seedpeagent($db);
