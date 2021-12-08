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
        $id_blog=$comment->getBlog();

        $sql= "INSERT INTO commentaires (contenu_commentaire,blogs) 
        VALUES ('$contenu_comment','$id_blog')"; // ID-BLOG ===> Yelzemni naadi id-blog parametre w naamlelha insert into

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

    
    function supprimerComment($id,$con)
    {
	$sql = "DELETE commentaires 
	        FROM commentaires 
			WHERE (id_commentaire='$id')";
	$con->exec($sql);
    }


    function modifierComment($comment,$con)
	{	
		$id = $comment->getIdComment();
		
		$contenu = $comment->getContenuComment();
		

		$sql = "UPDATE commentaires SET contenu_commentaire='$contenu' WHERE (id_commentaire=$id)";
		$con->exec($sql);
	}

    function recupererComment($id ,$con)
    {
        $sql = "SELECT * FROM commentaires where id_commentaire=$id";
        $reponseS = $con->query($sql);
        return $reponseS;
    } 

    
}
?>