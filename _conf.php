<?php
return array(
  "title" => 'gongora-et-les-querelles-litteraires-de-la-renaissance', // Nom du corpus
  "srcdir" => dirname( __FILE__ ), // dossier source depuis lequel exécuter la commande de mise à jour
  "cmdup" => "git pull 2>&1", // commande de mise à jour
  "pass" => "", // Mot de passe à renseigner obligatoirement à l’installation, entre guillemets
  "srcglob" => array( "xml/infarinato_secondo.xml" ), // sources XML à publier
  "sqlite" => "infarinato-secundo.sqlite", // nom de la base avec les métadonnées
);
?>
