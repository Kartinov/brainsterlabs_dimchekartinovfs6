<?php

class crud
{
  // private database object
  private $db;

  // constructor to initialize private variable to the database connection
  function __construct($conn)
  {
    $this->db = $conn;
  }

  public function insertClients($name, $email, $company, $phone, $academy)
  {
    try
    {
      //define sql statement to be executed
      $sql = "INSERT INTO `clients` 
                (`name`, `email`, `company`, `phone`, `academy_id`) 
      VALUES    (:name,:email,:company,:phone,:academy)";
      // prepare the sql statement for execution
      $stmt = $this->db->prepare($sql);

      // bind all placeholders to the actual values
      $stmt->bindparam(':name',     $name);
      $stmt->bindparam(':email',    $email);
      $stmt->bindparam(':company',  $company);
      $stmt->bindparam(':phone',    $phone);
      $stmt->bindparam(':academy',  $academy);

      $stmt->execute();
      return true;
    }
    catch (PDOException $e)
    {
      echo $e->getMessage();
      return false;
    }
  }

  public function getClients()
  {
    try
    {
      $sql = "SELECT * FROM `clients` 
                JOIN `academies` ON 
                  `clients`.`academy_id` = `academies`.`academy_id`";
      $result = $this->db->query($sql);
      return $result;
    }
    catch (PDOException $e)
    {
      echo $e->getMessage();
      return false;
    }
  }
}
