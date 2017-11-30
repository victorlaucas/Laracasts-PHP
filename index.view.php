<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>

    <style type="text/css">
      header {
        background-color: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <ul>
      <?php foreach($person as $feature => $val) : ?>
        <li><strong><?= $feature; ?></strong> <?= $val; ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>