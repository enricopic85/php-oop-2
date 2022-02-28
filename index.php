<?php 
require_once __DIR__ . './classi/animalProduts.php';
require_once __DIR__ . './classi/cibo.php';
require_once __DIR__ . './classi/cucce.php';
require_once __DIR__ . './classi/users.php';


$cibo1= new Cibo("Mattia",25,true,42,"8822251515","2024-10-10");
$cibo1->setNome("Gianluca");
echo $cibo1->getNome();

