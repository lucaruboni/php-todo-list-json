<?php

if ($_POST['done'] === true) {



  // read the json file with file_get_contents
  $tasks_string = file_get_contents('todo_list.json');
  // convert the json_string into an associative array with json_decode()
  $tasks_array = json_decode($tasks_string, true);

  //invert done or not
  foreach ($_POST['done'] as $key => $value) {
    $value = !$value;
  };


  // convert the array back into a json string
  $new_tasks_json_string = json_encode($tasks_array);
  // replace the file content using file_put_contents()
  file_put_contents('todo_list.json', $new_tasks_json_string);
  // add header application/json
  header('Content-Type: application/json');
  // echo json
  echo $new_tasks_json_string;
  }
    ?>