<?php 
include ('../controller/crudComment.php');
include ('../model/comments.php');


$cr = new crudComment();

//$id_blog=$_GET['id'];
$contenu_comment=$_POST['contenu'];
//$id_blog=$_POST['']; 3ayet l id blog lenna w baad ajoutih fl comment 
$comment= new Comments("","",$contenu_comment,1); // zid $id_blog filekher
$cr->ajouterComment($comment,$cr->conn);
//header('Location: ../view/single-news.php'); (Moshkla ml $_GET... Fl $_POST tekhdem mrigla... ken naaml form tekhdem)
 echo 'ADDED!';
?>
