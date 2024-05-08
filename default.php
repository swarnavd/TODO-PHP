<?php
require __DIR__ . '/Query.php';
$ob = new Query();
// Retrievs all the tasks which are resides in database for showing as default.
$tasks = $ob->fetchTask();
