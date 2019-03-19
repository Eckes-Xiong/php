<?php
require '../admin_entry.php';
$c = new QueryController();
$id=$_GET['id'];
if($id){
    $c->toQueryOne($id);
}else{
    $c->toQueryList();
}