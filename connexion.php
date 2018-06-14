<?php
session_start();
$titre="Connexion";
include("forum/includes/identifiants.php");




	 $pass          = htmlspecialchars($_POST['password']);
	 $pseudo        = htmlspecialchars($_POST['pseudo']);
	 
    $message='';
    if (empty($pseudo) || empty($pass) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
        $query=$db->prepare('SELECT membre_mdp, membre_id, membre_rang, membre_pseudo
        FROM forum_membres WHERE membre_pseudo = :pseudo');
        $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
	if (password_verify($pass, $data['membre_mdp'])) // Acces OK !
	{
	    $_SESSION['pseudo'] = $data['membre_pseudo'];
	    $_SESSION['level'] = $data['membre_rang'];
	    $_SESSION['id'] = $data['membre_id'];
	 
	 	header('location:./index.php');
	}
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p>
	    <br /><br />Cliquez <a href="./index.php">ici</a> 
	    pour revenir à la page d\'accueil</p>';
	}
    $query->CloseCursor();
    }
    echo $message.'</div></body></html>';



?>

<input type="hidden" name="page" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />

<?php
//$page = htmlspecialchars($_POST['page']);
//echo 'Cliquez <a href="'.$page.'">ici</a> pour revenir à la page précédente';
?>
