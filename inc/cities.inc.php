<?php

declare(strict_types=1);

// get cities starts with $char
function get_cities_starts_with(string $char): ?array
{
  global $pdo;

  $asciiValue = ord($char);
  if ($asciiValue < 65 || $asciiValue > 90)
    return get_cities_starts_with('A');

  $stmt = $pdo->prepare('SELECT * FROM `cities` WHERE `title` LIKE :char');
  $stmt->execute(['char' => $char . '%']);
  return $stmt->fetchAll();
}

// get city from Searchformular
function get_city_by_searchTerm(string $searchTerm): ?array
{
  global $pdo;

  $searchTerm = preg_replace("/[^a-zA-Z0-9\ \.äöüÄÖÜß,]/", '', $searchTerm); // Entfernt alle Zeichen, die keine Buchstaben oder Zahlen sind.

  if(mb_strlen($searchTerm) < 3)
    return null; // Wenn die Suchanfrage weniger als 3 Zeichen hat, wird nichts gefunden (Array ist leer)

  $stmt = $pdo->prepare('SELECT * FROM `cities` WHERE `title` LIKE :name ORDER By `population` DESC');
  $stmt->execute(['name' => '%' . $searchTerm . '%']); 
  $city = $stmt->fetchAll(); 
  return $city; // Gefundene Stadt (Array) oder false, wenn nichts gefunden
}

