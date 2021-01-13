<?php

require "Database.php";
require "SakafoRepository.php";

$db = new Database();

$sakafoRepository = new SakafoRepository($db);


var_dump($sakafoRepository->findAll());