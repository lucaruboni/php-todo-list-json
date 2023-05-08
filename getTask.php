
<?php
    $task_string_json = file_get_contents('todo_list.json');
    header('Content-Type: application/json');
    echo $task_string_json;



?>
