<?php

class crudBlog
{
	public $conn;
	function __construct()
	{
		include_once ('../config/connexion.php');
        $conf= new Connexion();
        $this->conn=$conf->cnx;
	}
	


function afficherblogs($con)
{
   $sql = "SELECT * FROM blogs";
$reponse = $con->query($sql);
return $reponse;
}


function recupererBlog($id ,$con)
{
   $sql = "SELECT * FROM blogs where id_blog=$id";
$reponse = $con->query($sql);
return $reponse;
}


		

}

?>