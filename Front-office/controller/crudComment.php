<?php 
class crudComment
{
    public $conn;
    function __construct()
    {
        include_once('../config/connexion.php');
        $confC= new Connexion();
        $this->conn=$confC->cnx;
    }

    function ajouterComment($comment,$con)
    {
        $contenu_comment=$comment->getContenuComment();
        //$id_blog=$comment->getIdBlog();

        $sql= "INSERT INTO commentaires (contenu_commentaire,id_blog) 
        VALUES ('$contenu_comment',1)";

        $con->exec($sql);
    }


    function afficherComment($con)
    {
        $sql= "SELECT * FROM commentaires";
        $reponseC= $con->query($sql);
        return $reponseC;
    }

   // function nb_comment($con)
    //{
     //   $sql= "SELECT count(*) FROM commentaires";
      //  $nbr_comment = $con->query($sql);
      //  return $nbr_comment;
    //}

    
    
}
?>