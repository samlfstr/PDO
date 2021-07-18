<!--
 * You dont need to include anything here
 * @author Isa Ozsoy
 * @license M.I.T
-->
<?php
require_once('db_con.php');

if (!empty($_GET['id'])){
    $id = $_GET['id'];
}

global $conn;

try {
    $results = $conn->prepare('select * from employees where id = ?');
    $results->bindParam(1,$id);
    $results->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
$employee = $results->fetch(PDO::FETCH_ASSOC);
if ($employee == false){
    echo "Sorry nothing to show";
    die();
}
echo $count;

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
      if(isset($id)){
          echo 'ID : ' . $employee['id'].'<br>';
          echo 'Name : ' . $employee['name'].'<br>';
          echo 'Status : ' . ($employee['in_office'] ? 1 : 0).'<br>';
      } else {
        echo "Sorry nothing to show";
      }
    ?>
</p>

</body>
</html>