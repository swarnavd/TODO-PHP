<?php
require __DIR__ . '/Query.php';
$input = $_POST['input'];
$ob = new Query();
// Checks if input field is null or not.if null then insert task into database.
if ($input != null) {
  $ob->insertion($input);
}
// Retrievs all the tasks which are resides in database.
$tasks = $ob->fetchTask()
?>

<table border="1" width="100%" align="center">
  <thead>
    <tr>
      <th>Task ID</th>
      <th>Tasks</th>
      <th>Edit</th>
      <th>Delete</th>
      <th>Marked</th>
    </tr>
  </thead>
  <?php foreach ($tasks as $x) : ?>
    <tr>
      <td><?= $x['id'] ?></td>
      <td><?= $x['task'] ?></td>
      <td><button type="button" class="edit" data-id="<?= $x['id'] ?>">Edit</button></td>
      <td><button type="button" class="delete" data-id="<?= $x['id'] ?>">Delete</button></td>
      <td><button type="button" class="mark" data-id="<?= $x['id'] ?>">Mark</button></td>
    </tr>
  <?php endforeach ?>
</table>
