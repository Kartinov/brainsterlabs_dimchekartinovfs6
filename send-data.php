<?php

require_once "assets/db/conn.php";

if (isset($_POST['submit']))
{
  // extract values from the $_POST array
  $name = $_POST['name'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $phone = $_POST['phone'];
  $academy = $_POST['academy'];

  // Call function to insert and track if success or not
  $isSuccess = $crud->insertClients($name, $email, $company, $phone, $academy);

  if ($isSuccess)
  {
    header("Location: index.php");
  }
  else
  {
    echo "ERROR";
  }
}
