<?php
include __DIR__ . '/inc/all.php';

$searchTerm = ($_GET['search'] ?? '');
$cityname = get_city_by_searchTerm($searchTerm);


render(__DIR__ . '/views/search.inc.php', [
  'cityname' => $cityname,
  'searchTerm' => $searchTerm,
]);