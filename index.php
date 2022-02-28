<?php 
require_once __DIR__ . './classi/animalProduts.php';
require_once __DIR__ . './classi/cibo.php';
require_once __DIR__ . './classi/cucce.php';
require_once __DIR__ . './classi/users.php';

$prod1=new Cibo("puppy plus",25,true,42,"80046549879","2024-10-10");
$prod2=new Cibo("gatto vicentino",23,false,92,"80089549879","2023-12-10");
$user1= new Users("Arturo","Musetti","via del campo 52","1985-05-11",true,"40236005987845","2022-27-02");
$user1->addCart($prod1);
$user1->addCart($prod2);
var_dump($user1->cart);

