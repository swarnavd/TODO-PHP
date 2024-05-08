<?php
require_once __DIR__ . '/Connection.php';
class Query {
  /**
   * A function to insert the to-do task of a particular user into database.
   *
   * @param string $item
   *  Stores user provided task.
   *
   * @return void
   */
  public function insertion(string $item) {
    $ob = new Connection();
    try {
      $sql = $ob->conn->prepare("INSERT INTO todo (task) VALUES(:task)");
      $sql->execute(array(':task' => $item));
    }
    catch (Exception $e) {
      echo $e;
    }
  }
  /**
   * A function to fetch all the to-do task of user.
   *
   * @return array
   */
  public function fetchTask() {
    $ob = new Connection();
    $sql2 = $ob->conn->prepare("SELECT * from todo ");
    $sql2->execute();
    $task = $sql2->fetchAll(PDO::FETCH_ASSOC);
    return $task;
  }
  /**
   * A function to delete a particular task which user wants.
   *
   * @param int $id
   *
   * @return void
   */
  public function deleteTask(int $id) {
    $ob = new Connection();
    $sql2 = $ob->conn->prepare("delete from todo where id = '$id' ");
    $sql2->execute();
  }
  /**
   * A function to edit a to-do task which user wants.
   *
   * @param string $task
   *  
   * @param integer $id
   *
   * @return void
   */
  public function updateTask(string $task, int $id) {
    $ob = new Connection();
    $sql2 = $ob->conn->prepare("update todo set task='$task' where id ='$id'");
    $sql2->execute();
  }
}
