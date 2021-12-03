<?php 
include ('../controller/crudComment.php');
include ('../model/comments.php');

$Cr= new crudComment();

$id=$_POST['blog_id'];
$contenu=$_POST['contenu'];

$comment= new Comments($contenu);
$comment->setIdComment($id);

$Cr->modifierComment($comment,$Cr->conn);
echo 'MODIFIED!';
?>