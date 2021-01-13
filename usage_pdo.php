<?php

require_once "Database.php";
require_once "SakafoRepository.php";
require_once "Sakafo.php";

$db = new Database();

$sakafoRepository = new SakafoRepository($db);

$s1 = new Sakafo();
$s1->setNom('jeroma');

$sakafoRepository->ajouterSakafo($s1);

var_dump($sakafoRepository->findAll());