<?php

$tasks = $db->selectALL('tasks');

require_once('views/index.view.php');
