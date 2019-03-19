<?php
require '../admin_entry.php';
$c = new ReleaseController();

$c->getExec($GLOBALS['HTTP_RAW_POST_DATA']);