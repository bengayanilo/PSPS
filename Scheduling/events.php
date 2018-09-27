<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

if ($params->status == "all") {
	$stmt = $db->prepare('SELECT * FROM appointment WHERE doctor_id=:id AND appointment_status!="free" ORDER BY appointment_status,appointment_start	');
  $stmt->bindParam(':id', $_SESSION['id']);
}
else{
	$stmt = $db->prepare('SELECT * FROM appointment WHERE doctor_id=:id AND appointment_status=:status');
  $stmt->bindParam(':id', $_SESSION['id']);
	$stmt->bindParam(':status', $params->status);
}
$stmt->execute();
$result = $stmt->fetchAll();

class Event {}
class Tags {}
$events = array();
$output = '<thead>
            <tr>
              <td class="column-name" rowspan=2><span>Patient Name</span></td>
              <td class="column-name" colspan=2><span>Time</span></td>
              <td class="column-name" rowspan=2><span>Status</span></td>
              <td class="column-name" rowspan=2><span>Actions</span></td>
            </tr>
            <tr>
              <td class="column-name"><span>start</span></td>
              <td class="column-name"><span>end</span></td>
            </tr>
          </thead>';
$confirm = ",'confirm'";
$cancel = ",'cancel'";
foreach($result as $row) {
  $output .= '<tr class="populated-column">
              <td class="appointment-data appointment-patient-name-data">
                <span>'.$row['appointment_patient_name'].'</span>
              </td>
              <td class="appointment-data appointment-time-data">
                <span>'.$row['appointment_id'].'</span>
              </td>
              <td class="appointment-data appointment-time-data">
                <span>'.$row['appointment_end'].'</span>
              </td>
              <td class="appointment-data appointment-status-data">
                <span>'.$row['appointment_status'].'</span>
              </td>';

  if ($row['appointment_status'] == 'waiting') {
      $output .= '<td class="appointment-data appointment-actions-data">
              <div class="tile level">
                <a class="tile button is-gray" href="#" onClick="updatestatus('.$row['appointment_id'].$confirm.')">confirm</a>
                <a class="tile button is-gray" href="#" onClick="updatestatus('.$row['appointment_id'].$cancel.')">cancel</a>
              </div>
            </td>
          </tr>';
    } else {
      $output .='<td class="appointment-data appointment-actions-data"></td></tr>';
    }
}

header('Content-Type: application/json');
echo json_encode($output);

?>
