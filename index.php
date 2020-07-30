<?php
    include("./includes.php");
    
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } elseif (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'list_tasks';
    }
    
    if ($action == 'list_tasks') {
        $userID = $_GET['userID'];
        if (!isset($_GET['userID'])) {
            $userID = 1;
        }
        $usernames = get_users();
        $tasks = get_tasks_with_userID($userID);
        include_once("./view/show_tasks.php");
    } else if ($action == 'delete_task') {
        include_once("./delete.php");
    }else if($action =="show_add_form"){
        include("./view/add_task.php");
    }else if($action == "show_edit_form"){
        include_once("./view/edit_form.php");
    }else if($action == "about"){
        include("about.php");
    }
?>



