<?php


require_once "SakafoRepository.php";
require_once "Sakafo.php";

$sakafoRepository = new SakafoRepository();

$s1 = new Sakafo();
$s1->setNom('jeroma');

$sakafoRepository->ajouterSakafo($s1);

var_dump($sakafoRepository->findAll());