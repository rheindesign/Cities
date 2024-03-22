<?php

// Generate $chars
function generate_alphabet()
{
  $chars = range(ord('A'), ord('Z'));
  return array_map('chr', $chars);
}
// Renderd the view
function render($path, array $data = [])
{
  ob_start();
  extract($data);
  require $path;
  $content = ob_get_contents();
  ob_end_clean();

  $alphabet = generate_alphabet();

  require __DIR__ . '/../views/layouts/main.view.php';
}


function e($html)
{
  return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}
