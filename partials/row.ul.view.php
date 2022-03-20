<ul class="hobbies__list-table">
    <?php
    if (isset($record['hobbies'])) {
        foreach ($record['hobbies'] as $hobby) {
    ?>
            <li class="hobbies__item-table"><?php echo $hobby; ?></li>
    <?php
        }
    } else {
        echo '-';
    }
    ?>
</ul>