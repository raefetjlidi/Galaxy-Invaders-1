<?php 
class Comments
{
    private $id_commentaire;
    private $date_commentaire;
    private $contenu_commentaire;
    private $id_blog;

    //Getters
    function getIdComment()
    {
        return $this->$id_commentaire;
    }
    function getDateComment()
    {
        return $this->$date_commentaire;
    }
    function getContenuComment()
    {
        return $this->$contenu_commentaire;
    }
    function getIdBlog()
    {
        return $this->$id_blog;
    }

    //Setters
    function setIdComment()
    {
        $this->id_commentaire=$id_commentaire;
    }
    function setDateComment()
    {
        $this->date_commentaire=$date_commentaire;
    }
    function setContenuComment()
    {
        $this->contenu_commentaire=$contenu_commentaire;
    }
    function setIdBlog()
    {
        $this->id_blog=$id_blog;
    }

    //Constructor
    function __construct($id_commentaire,$date_commentaire,$contenu_commentaire,$id_blog)
    {
        $this->id_commentaire=$id_commentaire;
        $this->date_commentaire=$date_commentaire;
        $this->contenu_commentaire=$contenu_commentaire;
        $this->id_blog=$id_blog;
    }
}
?>