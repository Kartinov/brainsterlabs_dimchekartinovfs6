<?php
require_once './assets/db/conn.php';
$results = $crud->getClients();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clients</title>
  <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
  <div class="container">
    <h2>Clients</h2>
    <div style="overflow-x: auto;">
      <table>
        <tr>
          <th>ID</th>
          <th>Firstname and Lastname</th>
          <th>Email adress</th>
          <th>Company name</th>
          <th>Phone number</th>
          <th>Academy</th>
        </tr>
        <?php while ($r = $results->fetch(PDO::FETCH_ASSOC))
        { ?>
          <tr>
            <td><?php echo $r['client_id'] ?></td>
            <td><?php echo $r['name'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><?php echo $r['company'] ?></td>
            <td><?php echo $r['phone'] ?></td>
            <td><?php echo $r['academy'] ?></td>
          </tr>

        <?php } ?>
      </table>
    </div>
  </div>
</body>

</html>