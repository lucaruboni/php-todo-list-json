
<?php
    $taskString_json = file_get_contents('todo_list.json');
    header('Content-Type: application/json');
    echo $taskString_json;



?>
