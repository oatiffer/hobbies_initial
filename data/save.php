<?php

require_once __DIR__ . '/../classes/Database.php';

$split = explode('/', explode('?', $_SERVER['HTTP_REFERER'])[0]);
$referer = $split[count($split) - 1];

$firstName = !empty($_POST['first_name']) ? $_POST['first_name'] : null;
$lastName = !empty($_POST['last_name']) ? $_POST['last_name'] : null;
$hobbies = !empty($_POST['hobbies']) ? $_POST['hobbies'] : null;

$errors = null;

if (!$firstName) {
    $errors['first_name'] = 'First name required';
}

if (!$lastName) {
    $errors['last_name'] = 'Last name required';
}

if (!$hobbies) {
    $errors['hobbies'] = 'Please select a hobbie';
}

$db = new Database();
$id = $_POST['id'];

switch ($referer) {
    case '':
        if (isset($errors)) {
            $url = '/?' . http_build_query(['errors' => $errors]);
        
            header("Location: $url");
            die;
        }
        
        $db->add(['first_name' => $firstName, 'last_name' => $lastName, 'hobbies' => $hobbies]);
        header('Location: /');
        break;

    case 'edit.php':
        if (isset($errors)) {
            $url = '/edit.php?' . http_build_query(['errors' => $errors, 'id' => $id]);
            header("Location: $url");
            die;
        }

        $db->update($id, ['first_name' => $firstName, 'last_name' => $lastName, 'hobbies' => $hobbies]);
        header('Location: /');
        break;
        
    default:
        break;
}
