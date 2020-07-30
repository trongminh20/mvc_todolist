<?php
    function get_tasks_with_userID($userID){
        global $db;
        $query = "select * from tasks where userID=$userID";
        $tasks = $db->query($query);
        return $tasks;
    }
    function edit_task($task,$note,$taskID){
        global $db;
        $query = 'UPDATE tasks SET task=?, note=? WHERE taskID=?';
        $statement=$db->prepare($query);
        $statement->execute([$task, $note, $taskID]);
        $statement -> closeCursor();
    }
    
    function add_task($userID, $task, $note){
        global $db;
        $data = ['userID' => $userID, 'task'=>$task, 'note'=>$note];
        $query = 'INSERT INTO tasks(userID, task, note) VALUES (:userID,:task,:note)';
        $statement = $db->prepare($query) -> execute($data);
    }
    
    function get_task_with_taskID($taskID){
        global $db;
        $query = 'SELECT * FROM tasks where taskID = :taskID';
        $statement = $db->prepare($query);
        $statement->bindValue(':taskID',$taskID);
        $statement->execute();
        $task = $statement->fetch();
        $statement ->closeCursor();
        return $task;
    }
    function delete_task($taskID){
        global $db;
        $query = "delete from tasks where taskID=$taskID";
        $stm = $db->prepare($query)->execute();
    }
    
    