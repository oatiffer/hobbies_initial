<?php

require_once __DIR__.'/classes/Database.php';

$users = null;
$errors = null;

if (isset($_GET['errors'])) {
    $errors = $_GET['errors'];
}

$db = new Database();
$allFetchedData = $db->fetchAll();

require_once __DIR__.'/partials/index.view.php';
