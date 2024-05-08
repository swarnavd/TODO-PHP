<?php
require_once __DIR__ . '/default.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link rel="stylesheet" href="./CSS/home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
  <main class="wrapper">
    <div id="myDIV" class="header">
      <h2>My To Do List</h2>
      <input type="text" id="myInput" placeholder="Title...">
      <span class="addBtn">Add</span>
    </div>
    <div class="table-data">
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
    </div>
    <div class="edit-div">
      <input type="text" name="edit-field" class="edit-field" placeholder="Write to edit...">
      <button type="button" class="editBtn">Update</button>
    </div>
    <script src="./JS/script.js"></script>
  </main>

</body>

</html>
