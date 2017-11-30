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
      <?php foreach($task as $item => $val) : ?>
        <li>
          <strong><?= ucwords($item); ?></strong>: <?= $val; ?>
        </li>
      <?php endforeach; ?>

      <!-- In order to have more control over what gets printed in boolean iterate through one at a time -->

      <li>
        <strong>Name: </strong> <?= $task['title']; ?>
      </li>      

      <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
      </li>

      <li>
        <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
      </li>

      <li>
        <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ; ?>
      </li>
    </ul>
  </body>
</html>