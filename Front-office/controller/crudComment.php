<?php 
class crudComment
{
    public $conn;
    function __construct()
    {
        include('../config/connexion.php');
        $conf= new Connexion();
        $this->conn=$conf->cnx;
    }

    function ajouterComment($comment,$con)
    {
        $contenu_comment=$comment->getContenuComment();

        $sql= "INSERT INTO commentaires (contenu_commentaire) 
        VALUES ('$contenu_comment')";

        $con->exec($sql);
    }
}
?>