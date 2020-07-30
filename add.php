<?php
    include("./includes.php");
    
    $userID=filter_input(INPUT_POST, 'userID');
    $task = filter_input(INPUT_POST, 'task');
    $note = filter_input(INPUT_POST,'note');
  
    add_task($userID,$task,$note);
    
    header("Location:index.php?action=list_tasks");
    ?>