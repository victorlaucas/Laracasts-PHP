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
    </ul>
  </body>
</html>