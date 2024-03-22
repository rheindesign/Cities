<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="css/simple.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Städte Verzeichnis</title>
</head>

<body>

  <header>
    <h1>Städte-Verzeichnis</h1>
    <p>Hier finden Sie eine Übersicht aller Städte in Deutschland</p>
    <span style="font-size: 0.75rem">Stand Oktober 2021</span>
    <nav>
      <?php foreach ($alphabet as $char) : ?>
        <a href="index.php?<?= http_build_query(['char' => $char]); ?>">
          <?= e($char) ?>
        </a>
      <?php endforeach; ?>
    </nav>
    <hr>
    <form action="search.php" method="GET">
      <input minlength="3" type="text" name="search" value="<?= e($searchTerm ?? '') ?>" placeholder="Gib den Stadtname ein">
      <input type="submit" value="Suchen">
    </form>

  </header>

  <main>
    <?php echo $content; ?>
  </main>

  <footer>
    <p>&copy; 2024 by Rheindesign</p>
  </footer>
  <script src="app.js" type="module"></script>
</body>

</html>