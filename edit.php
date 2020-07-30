<?php
    include("./includes.php");
    
    
    $taskID=filter_input(INPUT_POST,'taskID');
    $task =filter_input(INPUT_POST, 'taskUpdated');
    $note = filter_input(INPUT_POST, 'noteUpdated');

    edit_task($task,$note,$taskID);
    header("Location:./index.php?action=list_tasks");