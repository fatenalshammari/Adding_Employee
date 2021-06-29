<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
   integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $e_id = $_POST['e_id'];
    $department = $_POST['department'];

    if(isset($_POST['button'])){
      if(file_exists('employee_data.json')){
      $current_data = file_get_contents('employee_data.json');
      $array_data = json_decode($current_data, true);
      $extra = array(
        'Employee_Name' => $name ,
        'Employee_id' => $e_id ,
        'Employee_Department' => $department );

        $array_data[] = $extra;
        $final_data = json_encode($array_data);

        if(file_put_contents('employee_data.json', $final_data)){
          $message= "<p class='alert alert-success'>File Add Success</p>";
          echo $message;
        }


    }

}
}
?>
