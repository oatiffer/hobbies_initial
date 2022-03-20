<?php

    require_once __DIR__.'/classes/Database.php';

    $errors = [];

    if (isset($_GET['errors'])) {
        $errors = $_GET['errors'];
    }

    $db = new Database();
    $record = $db->search($_GET['id']);
    $id = !empty($_GET['id']) ? $_GET['id'] : null;

    if (!$id || !$record) {
        header('Location: /');
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Forms with PHP</title>
</head>

<body>
    <h1 class="page__title">Update your info</h1>
    <form action="./data/save.php" method="POST" class="form">
        <div class="container__top">
            <div class="container__top-left">
                <h2 class="name__title">Your name</h2>
                <label>First name:
                    <input name="first_name" type="text" value="<?php echo $record['first_name']; ?>">
                </label>
                <?php if (isset($errors['first_name'])) { ?>
                    <span class="error"><?php echo $errors['first_name'] ?></span>
                <?php } ?>
                <label>Last name:
                    <input name="last_name" type="text" value="<?php echo $record['last_name']; ?>">
                </label>
                <?php if (isset($errors['last_name'])) { ?>
                    <span class="error"><?php echo $errors['last_name'] ?></span>
                <?php } ?>
                <input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
            </div>
            <div class="container__top-right">
                <h2 class="hobbies__title">Your hobbies</h2>
                <ul class="hobbies__list-form">
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[soccer]"  value="Soccer" <?php echo isset($record['hobbies']['soccer']) ? 'checked' : ''; ?>>
                            Soccer
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[skate]" value="Skate" <?php echo isset($record['hobbies']['skate']) ? 'checked' : ''; ?>>
                            Skate
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[php]" value="PHP" <?php echo isset($record['hobbies']['php']) ? 'checked' : ''; ?>>
                            PHP
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[js]" value="JavaScript" <?php echo isset($record['hobbies']['js']) ? 'checked' : ''; ?>>
                            JavaScript
                        </label>
                    </li>
                </ul>
                <?php if (isset($errors['hobbies'])) { ?>
                    <span class="error__hobbies"><?php echo $errors['hobbies'] ?></span>
                <?php } ?>
            </div>
        </div>
        <div class="container__buttons">
            <button type="submit" class="form__button">Update</button>
        </div>
    </form>

</body>

</html>