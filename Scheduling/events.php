<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

if ($params->status == "all") {
	$stmt = $db->prepare('SELECT * FROM appointment WHERE doctor_id=21 ORDER BY appointment_status,appointment_start	');
}
else{
	$stmt = $db->prepare('SELECT * FROM appointment WHERE doctor_id=21 AND appointment_status=:status');
	$stmt->bindParam(':status', $params->status);
}
$stmt->execute();
$result = $stmt->fetchAll();

class Event {}
class Tags {}
$events = array();

foreach($result as $row) {
  $e = new Event();
  $e->id = $row['appointment_id'];
  $e->text = $row['appointment_patient_name'] ?: "";
  $e->start = $row['appointment_start'];
  $e->end = $row['appointment_end'];
  $e->resource = $row['doctor_id'];
  $e->tags = new Tags();
  $e->tags->status = $row['appointment_status'];
  $events[] = $e;
}

header('Content-Type: application/json');
echo json_encode($events);

?>
