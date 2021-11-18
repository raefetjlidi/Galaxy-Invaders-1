<?php
include ('../controller/crudBlog.php');
include ('../model/blogs.php');

$cr=new crudBlog();

$nom=$_POST['name'];
$categorie=$_POST['categorie'];
$editeur=$_POST['editeur'];
$contenu=$_POST['contenu'];

$blog=new Blogs($nom,$categorie,$editeur,$contenu);
$cr->ajouterBlog($blog,$cr->conn);
echo 'ADDED!'

?>


