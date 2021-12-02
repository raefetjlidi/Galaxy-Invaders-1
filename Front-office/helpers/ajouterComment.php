<?php 
include ('../controller/crudComment.php');
include ('../model/comments.php');


$cr = new crudComment();

//$id_blog=$_GET['id'];
$contenu_comment=$_POST['contenu'];
//$id_blog=$_POST['']; 3ayet l id blog lenna w baad ajoutih fl comment 
$comment= new Comments("","",$contenu_comment,1); // zid $id_blog filekher
$cr->ajouterComment($comment,$cr->conn);
echo 'ADDED!';
?>
