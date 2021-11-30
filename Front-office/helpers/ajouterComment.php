<?php 
include ('../controller/crudComment.php');
include ('../model/comments.php');

$cr = new crudComment();

$contenu_comment=$_POST['contenu'];
$comment= new Comments('','',$contenu_comment,'');
echo 'ADDED!';
?>
