<?php
  include ("connect.php");
  $sql_type = "SELECT * FROM products";
  $resquery = $connectiondb->query($sql_type);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title> Lista | Pizza Docker</title>
    <link rel="stylesheet" href="package/bootstrap/css/bootstrap.min.css" />
  </head>
  <body>
    
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Produto</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if ($resquery->num_rows > 0){
              while ($row = $resquery->fetch_assoc()){
                echo '<tr>';
                echo '<td>'. $row['name'] .'</td>';
                echo '<td>'. $row['price'] .'</td>';
                echo '</tr>';
              }
            }
          ?>
        </tbody>
      </table>
    </div>

  </body>
</html>