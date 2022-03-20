<?php
    require_once __DIR__.'/classes/Database.php';

    $id = !empty($_POST['id']) ? $_POST['id'] : null;
    $db = new Database();
    $record = $db->search($id);

    if (!$id || !$record) {
        header('Location: /');
        die;
    }

    $db->delete($id);
    header('Location: /');
    die;
?>