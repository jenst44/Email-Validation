<?php 

define('DB_HOST', 'localhost');
define('DB_USERS', 'root');
define('DB_PASS', 'root');
define('DB_DATABASE', 'email_validation');

$connection = new mysqli(DB_HOST, DB_USERS, DB_PASS, DB_DATABASE);


if ($connection->connect_errno) 
{
   die("Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error);
}


// mysqli_query($connection, "INSERT INTO emails (email) VALUES ('{$_POST['email']}')");

// $query = mysqli_query($connection, "SELECT * FROM emails");

// foreach($query as $row) {
//   var_dump($row);
// }


unset($_SESSION['error']);


function fetch_all($query){
  $data = array();
  global $connection;
  $result = $connection->query($query);

  while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
  }
  return $data;
}



 ?>