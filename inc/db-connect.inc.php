<?php
declare(strict_types=1); 
try {
 $pdo = new PDO('mysql:host=localhost;dbname=php_cities','php_cities','',[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
} catch (PDOException $e) {
 echo 'Probleme mit der Datenbankverbindung' . $e->getMessage();
 die();
}
