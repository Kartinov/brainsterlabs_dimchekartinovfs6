<?php

require_once('./assets/includes/header.php');
require_once('assets/db/conn.php');

?>

<div class="success-wrapper wrapper">

  <?php

  if (isset($_POST['submit'])) {
    // extract values from the $_POST array
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $company = $_POST['company'];
    $phone   = $_POST['phone'];
    $academy = $_POST['academy'];

    // Call function to insert and track if success or not
    $isSuccess = $crud->insertClients($name, $email, $company, $phone, $academy);

    if ($isSuccess) {
      echo "<h2 style='text-align: center;' class='display-big'>Успешна апликација</h2>";
    } else {
      echo "<h2 style='text-align: center;' class='display-big'>Неуспешно, обидете се повторно</h2>";
    }
  }

  ?>

</div>

<?php require_once('./assets/includes/footer.php'); ?>