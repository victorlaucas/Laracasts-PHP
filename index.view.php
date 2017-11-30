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

        <strong>Status: </strong>
        <?php

        if ($task['completed']) {
          echo '&#9989;';
        } else {
          echo "Incomplete";
        }

        ?>

        <!-- Short hand for if -->

        <strong>Status: </strong>

        <?php if ($task['completed']) : ?>
          <span class="icon">&#9989;</span>
        <?php else : ?>
          <span class="icon">Incomplete</span>
        <?php endif; ?>
      </li>
    </ul>
  </body>
</html>