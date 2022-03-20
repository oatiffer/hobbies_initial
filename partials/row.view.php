<?php foreach ($allFetchedData as $id => $record) { ?>
    <tr class="table__row">
        <td><?php echo $record['first_name']; ?></td>
        <td><?php echo $record['last_name']; ?></td>
        <td>
            <?php require 'row.ul.view.php'; ?>
        </td>
        <td class="actions__cell">
            <a href="<?php echo '../edit.php?id='.$id ?>" class="edit__link">Edit</a>
            <form action="../delete.php" method="POST" class="delete__form">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button class="delete__btn">Delete</button>
            </form>
        </td>
    </tr>
<?php } ?>