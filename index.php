<?php

include_once __DIR__ . '/inc/all.php';

$cities = get_cities_starts_with($_GET['char'] ?? 'A');

render(__DIR__ . '/views/index.inc.php', ['cities' => $cities]);
