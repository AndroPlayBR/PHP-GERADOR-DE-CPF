<?php
include 'Class/GeradorClass.php';

$token = 'Zq7Up1bLA1C9hTACQgr5c5eGuOtOYKVflcNZNhff';

$gerador = new Gerador($token);
$gerador->type = "cpf";
$gerador = $gerador->gerar();

echo $gerador->number_formatted;