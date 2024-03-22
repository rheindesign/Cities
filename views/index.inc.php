<?php if (!empty($cities)) : ?>
  <table>
    <thead>
      <tr>
        <th>Name der Stadt</th>
        <th>Befölkerung</th>
        <th>Fläsche</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cities as $city) : ?>
        <tr>
          <td><?= e($city['title']) ?></td>
          <td><?= e($city['population']) ?></td>
          <td><?= e($city['area']) . ' m²' ?></td>
        </tr>
      <?php endforeach; ?>
  </table>
<?php else : ?>
  <p>Keine Stadt gefunden!</p>
<?php endif; ?>
