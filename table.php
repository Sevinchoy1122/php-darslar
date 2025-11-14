<?php 
$talabalar = [
    ["ism" => "ali", "familiya" => "odilbekov", "yoshi" => 18,'bahosi'=>5],
    ["ism" => "murod", "familiya" => "komilov", "yoshi" => 16,'bahosi'=>4],
    ["ism" => "bekzod", "familiya" => "masharipov", "yoshi" => 14,'bahosi'=>5],
    ["ism" => "sarvar", "familiya" => "islamof", "yoshi" => 19,'bahosi'=>4],
    ["ism" => "diyor", "familiya" => "ziynatboyev", "yoshi" => 15,'bahosi'=>5],
]
?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Jadval namunasi</title>
  <style>
    table {
      width: 60%;
      border-collapse: collapse;
      margin: 20px auto;
      font-family: Arial, sans-serif;
    }
    th, td {
      border: 1px solid #555;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

  <h2 style="text-align:center;">Talabalar jadvali</h2>

  <table>
    <tr>
      <th>№</th>
      <th>Ism</th>
      <th>Familiya</th>
      <th>Yosh</th>
      <th>Bahosi</th>
    </tr>
    <?php  foreach($talabalar as $key => $value):?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $value['ism']?></td>
        <td><?php echo $value['familiya']?></td>
        <td><?php echo $value['yoshi']?></td>
        <td><?php echo $value['bahosi']?></td>
    </tr>
    <?php endforeach;?>
  </table>
</body>
</html>
