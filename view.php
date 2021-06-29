<?php
  $file_data = json_decode(file_get_contents('employee_data.json'));

  foreach ($file_data as $data) {
    echo "<li>".$data->Employee_Name."->".$data->Employee_id."->".$data->Employee_Department."</li>";
  }
?>
