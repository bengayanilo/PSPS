<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

$stmt = $db->prepare("UPDATE appointment SET appointment_patient_name = :name, appointment_status = :status WHERE appointment_id = :id");
$stmt->bindParam(':id', $params->id);
$stmt->bindParam(':name', $params->name);
$stmt->bindParam(':status', $params->status);
$stmt->execute();

$stmt = $db->prepare("SELECT t2.user_email,t1.user_name as Doctor,t2.appointment_start,t2.appointment_status 
					FROM tbl_users t1 
					INNER JOIN (
					    SELECT * 
					    FROM `appointment` 
					    INNER JOIN tbl_users 
					    WHERE user_name = appointment_patient_name 
					    AND appointment_id = :id) t2 
					ON t1.user_id = t2.doctor_id");
$stmt->bindParam(':id', $params->id);
$stmt->execute();
$appointment = $stmt->fetch();
// if($appointment)
// {
//     $to      = $appointment['user_email'];
//     $subject = 'Appointment Confirmation';
//     $message = 'Your appointment with '.$appointment['Doctor'].'  has been '.$appointment['appointment_status'];
//     $headers = 'From: renlino70@gmail.com' . "\r\n" .
//         'Reply-To: renlino70@gmail.com.com' . "\r\n" .
//         'X-Mailer: PHP/' . phpversion();

//     mail($to, $subject, $message, $headers);
// }

class Result {}
$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

header('Content-Type: application/json');
echo json_encode($response);

?>
