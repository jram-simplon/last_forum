<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=newsheeks', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
