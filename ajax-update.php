<?php
require_once __DIR__ . '/Query.php';
// Takes edit input from ajax file.
$value = $_POST['edit'];
// Takes task id from ajax file.
$id = $_POST['id'];
// Creating object for Query class.
$ob = new Query();
// Checks that value is null or not which user wants to update.
if ($value != null) {
  $ob->updateTask($value, $id);
}
// Retrievs all the tasks which are resides in database.
$tasks = $ob->fetchTask();
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
