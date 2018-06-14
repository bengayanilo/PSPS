<?php
require_once '_db.php';

$scheduler_doctors = $db->query('SELECT * FROM tbl_users WHERE user_type="psy"');

class Resource {}

$result = array();

foreach($scheduler_doctors as $doctor) {
  $r = new Resource();
  $r->id = $doctor['user_id'];
  $r->name = $doctor['user_name'];
  $result[] = $r;
}

header('Content-Type: application/json');
echo json_encode($result);

?>
