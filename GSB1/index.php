<?php
require_once "MODELE/modeleGSB.php";

require_once "CONTROLEUR/Controleur.php";

if(empty($_GET["action"]))
    appelAcceuil();
elseif ($_GET["action"]=="MENTION")
    appelMENTION();
elseif($_GET["action"]=="MEDOC")
    appelMEDOC();

elseif($_GET["action"]=="ACTIVITE")
    appelACTIVITE();