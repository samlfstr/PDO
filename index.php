<!--
 * You dont need to include anything here
 * @author Isa Ozsoy
 * @license M.I.T
-->
<?php
require_once('CON/db_read.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="STYLE/main.css">
  <title>Document</title>
</head>
<body>

<div class="l-container">
  <ul class="l-employees">
      <?php
      for ($i = 0; $i < count($arr); $i++) {
          $l_str = '<li>';
          $l_str .= '<a href="CON/db_employees.php?id=';
          $l_str .= $arr[$i]['id'].'">';
          $l_str .= $arr[$i]['name'];
          $l_str .= '</li></a>';
          echo $l_str;
      }
      ?>
  </ul>
</div>

<div class="t-container"></div>
<!--<button id="click_me"> Get Data</button>-->

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="JS/main.js"></script>
</body>
</html>