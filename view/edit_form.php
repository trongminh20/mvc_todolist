<?php
   $taskID=filter_input(INPUT_POST,'taskID');
   $task = get_task_with_taskID($taskID);
?>
<form action="edit.php" method="post">
    <input type="input" name="taskID" value="<?=$task['taskID'];?>">
    <input type="input" name="taskUpdated" value="<?=$task['task'];?>">
    <textarea cols="25" rows="3" name="noteUpdated"><?=$task['note'];?></textarea>
    <input type="submit" value="Done">
</form>
