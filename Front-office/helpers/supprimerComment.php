<?php
include ('../controller/crudComment.php');
$Cr= new crudComment();

$id=$_GET['idC'];
$Cr->supprimerComment($id,$Cr->conn);
//header('Location: ../view/single-news.php'); (Moshkla ml $_GET... Fl $_POST tekhdem mrigla .... ken naaml form tekhdem mrigla)
echo 'DELETED!';
?>
