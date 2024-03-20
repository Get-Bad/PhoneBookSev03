<!DOCTYPE html>
<html lang="ru">
  <!-- -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/phoneBookStyle.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Телефонный справочник</title>
</head>

<body>

<!-- DB CONNECTION -->

<?php 
  include 'databases.php';
?>

<!-- NAVIGATION BAR -->
<div>
<nav class="navbar navbar-light bg-light" style="text-align:center">
  <div class="container-fluid" style="text-align:center">
  </div>
</nav>
<h5 style="text-align:center">
Телефонный справочник ГБУЗС "ЦЭМПиМК"
</h5>
</div>

<!-- CHEKING THE DB CONNECTION --> 

<!--
  <p>
    Статус: 
    <?php
        /*
            if ($conn == false) {  
              echo "Ошибка подключения базы данных";  
            } else {                                
              echo "База данных подключена";                  
            }
        */    
    ?>
  </p>
-->

<!-- SEARCH BOX -->

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="searchText" onkeyup="tableSearch()" placeholder="Введите запрос">
        </div>
      </form>
    </div>
  </div>


<!-- TABLE --> 

<table class="table table-striped" id="infoTable" style="width: 50%;margin: auto;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Организация</th>
        <th scope="col">Телефон</th>
        <th scope="col">Имя</th>
        <th scope="col">Тип</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list as $row): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['organization']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['type']; ?></td>
        </tr>
      <?php endforeach; ?>    
    </tbody>
  </table>
<script src="js/live_search.js"></script>
</body>
</html>