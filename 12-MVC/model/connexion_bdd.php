<?php

//connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=site_commerce', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
