<?php

function index($db)
{
    // dd($_SERVER);
    require BASE_PROJECT_PATH . "/repository/peagent.php";
    $r = getAllpeagent($db);

    masterView('peagent/index', ['peagent' => $r]);
}

function show($db)
{
    require BASE_PROJECT_PATH . "/repository/peagent.php";
    $r = findpeagentByID($db, $_GET['id']);

    masterView('peagent/show', ['peagent' => $r]);
}

function create($db)
{
    masterView('peagent/insert');
}

function store($db)
{
    require BASE_PROJECT_PATH . "/repository/peagent.php";

    $j = newpeagent($db, $_POST);

    header("Location: " . url("/peagent"));
    die();
}

function edit($db)
{
    require BASE_PROJECT_PATH . "/repository/peagent.php";
    $r = findpeagentByID($db, $_GET['id']);

    masterView('peagent/edit', ['peagent' => $r]);
}

function update($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/peagent.php";

    $j = updatepeagentByID($db, $id, $_POST);

    header("Location: " . url("/peagent/show?id={$id}"));
    die();
}

function destroy($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/peagent.php";

    $j = deletepeagent($db, $id);

    header("Location: " . url("/peagent"));
    die();
}
