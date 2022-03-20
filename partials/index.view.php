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
    <h1 class="page__title">Add your favorite hobbies</h1>
    <form action="../data/save.php" method="POST" class="form">
        <div class="container__top">
            <div class="container__top-left">
                <h2 class="name__title">What's your name?</h2>
                <label>First name:
                    <input name="first_name" type="text" >
                </label>
                <?php if(isset($errors['first_name'])) { ?>
                    <span class="error"><?php echo $errors['first_name'] ?></span>
                <?php } ?>
                <label>Last name:
                    <input name="last_name" type="text" >
                </label>
                <?php if(isset($errors['last_name'])) { ?>
                    <span class="error"><?php echo $errors['last_name'] ?></span>
                <?php } ?>
            </div>
            <div class="container__top-right">
                <h2 class="hobbies__title">What are your hobbies?</h2>
                <ul class="hobbies__list-form">
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[soccer]" value="Soccer">
                            Soccer
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[skate]" value="Skate">
                            Skate
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[php]" value="PHP">
                            PHP
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="hobbies[js]" value="JavaScript">
                            JavaScript
                        </label>
                    </li>
                </ul>
                <?php if(isset($errors['hobbies'])) { ?>
                    <span class="error__hobbies"><?php echo $errors['hobbies'] ?></span>
                <?php } ?>
            </div>
        </div>
        <div class="container__buttons">
            <button type="reset" class="form__button">Reset</button>
            <button type="submit" class="form__button">Add</button>
        </div>
    </form>
    <table class="data__table">
        <thead>
            <throw class="table__header-row">
                <th class="table__header">First Name</th>
                <th class="table__header">Last Name</th>
                <th class="table__header">Hobbies</th>
                <th class="table__header">Actions</th>
            </throw>
        </thead>
        <tbody>
            <?php require_once 'row.view.php'; ?>
        </tbody>
    </table>
</body>

</html>