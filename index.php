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
    
    <header>
      <h1>
        <?php 
          $name = $_GET['name'];

          echo "Hello, $name"
        ?>
      </h1>
    </header>
  
  </body>
</html>