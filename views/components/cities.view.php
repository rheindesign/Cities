<?php if ($cityname) : ?>
  <table>
    <thead>
      <tr>
        <th>Name der Stadt</th>
        <th style="text-align: right">Befölkerung in Milionen</th>
        <th style="text-align: right">Fläsche</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cityname as $name) : ?>
        <tr>
          <td><?php echo e($name['title'] ?? '') ?></td>
          <td><?php echo e((int) $name['population'] ?? '')/1000000 ?></td>
          <td><?php echo e($name['area'] ?? '') . ' km²' ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else : ?>
  <p>Stadt wurde nicht gefunden</p>
<?php endif; ?>