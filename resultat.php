<?php
require_once("user.php");
$result = new CompteBancaire($_POST["name"],$_POST["solde"]);
echo $result->Affiche();

$result->depot($_POST["cashin"]);
$result->retrait($_POST["cashout"]);
echo $result->Affiche();

