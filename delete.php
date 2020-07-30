<?php
    //$userID = $_GET['userID'];
    $taskID = filter_input(INPUT_POST, 'taskID');
    delete_task($taskID);
    header("location:.?userID=".$_POST['userID']);