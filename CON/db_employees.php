<!--
 * You dont need to include anything here
 * @author Isa Ozsoy
 * @license M.I.T
-->
<?php
require_once('db_con.php');

$id = !empty($_GET['id']) ?? 'Empty';
global $conn;

try {
    $db_query = 'select * from employees where id='.$id;
    $results = $conn->query($db_query);
    $employee = $results->fetch(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    echo $e->getMessage();
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../STYLE/main.css">
  <title>Document</title>
</head>
<body>

<h1>Employee Intel</h1>
<p>
    <?php
      echo 'ID : ' . $employee['id'].'<br>';
      echo 'Name : ' . $employee['name'].'<br>';
      echo 'Status : ' . ($employee['in_office'] ? 1 : 0).'<br>';
    ?>
</p>

</body>
</html>