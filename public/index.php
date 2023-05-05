<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Database\MyPdo;
use Html\WebPage;

MyPDO::setConfiguration('mysql:host=mysql;dbname=cutron01_music;charset=utf8', 'web', 'web');

$webPage = new WebPage();

$Index = new WebPage();

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
    SELECT id, name
    FROM artist
    ORDER BY name
SQL
);

$stmt->execute();

while (($ligne = $stmt->fetch()) !== false) {
    $Index -> appendContent("<p>{$Index -> escapeString($ligne['name'])}\n");
    #echo "<p>{$ligne['name']}\n";
}

$Index -> appendContent("<p>{$Index -> escapeString("'^)}]ù%|<>'")}");

echo $Index -> toHTML();