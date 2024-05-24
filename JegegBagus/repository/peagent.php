<?php


function getAllpeagent($db)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_peagent
    ORDER BY hobi DESC;
    SQL;

    $result =  mysqli_query($db, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function findpeagentByID($db, $id)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_peagent
    WHERE id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}

function newpeagent($db, $data)
{
    $sql = <<<SQL
    INSERT INTO `tb_peagent` 
    VALUES (
        NULL,
        '{$data['nama']}',
        '{$data['hobi']}',
        '{$data['umur']}',
        '{$data['tinggi']}',
        NOW(),
        NOW()
    )
    SQL;

    if (mysqli_query($db, $sql)) {
        return mysqli_insert_id($db);
    } else {
        return null;
    }
}


function updatepeagentByID($db, $id, $data)
{
    $sql = <<<SQL
    UPDATE tb_peagent
    SET 
        nama = '{$data['nama']}',
        hobi = '{$data['hobi']}',
        umur = '{$data['umur']}',
        umur = '{$data['tinggi']}',
        updated_at = NOW()
    WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deletepeagent($db, $id)
{
    $sql = <<<SQL
    DELETE FROM tb_peagent WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return true;
    } else {
        return false;
    }
}
