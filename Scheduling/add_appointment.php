<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);
$start = $_POST['date'].' '.$_POST['start_time'];
$end = $_POST['date'].' '.$_POST['end_time'];
$doctor = $_POST['pick_doctor'];

$stmt = $db->prepare('INSERT INTO appointment (appointment_start, appointment_end, appointment_status, doctor_id) VALUES (:start, :end, "waiting", :doctor)');
$stmt->bindParam(':start', $start);
$stmt->bindParam(':end', $end);
$stmt->bindParam(':doctor', $doctor);
// $stmt->bindParam(':start', $start);
// $stmt->bindParam(':end', $test->end_time);
// $stmt->bindParam(':doctor', $test->pick_doctor);
$stmt->execute();


echo "inserted";

?>