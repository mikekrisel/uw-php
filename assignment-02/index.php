<?php

require_once 'bootstrap.php';

$db = new \db\db('localhost', 'username', 'password', 'uw-php');
//$db->update("Persons", "first_name = 'Carl' WHERE first_name = 'Mike'");
//$db->insert("Persons", "first_name, last_name, email", "'John', 'Smith', 'john.smith@gmail.com'");
//$db->delete("Persons", "email = ''");
$result = $db->query("Persons");
print_r($result);

?>