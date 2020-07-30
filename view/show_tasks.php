<?php
    include("includes.php");
    include("view/header.php");
?>
<div>
    
       <?php include("sidebar.php");?>
    
    <table>
        <tr>
            <th>ID</th>
            <th>task</th>
            <th>note</th>
        </tr>
        <?php foreach($tasks as $task):?>
        <tr>
            <td><?=$task['taskID'];?></td>
            <td><?=$task['task'];?></td>
            <td><?=$task['note'];?></td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_task">
                    <input type="hidden" name="taskID" value="<?=$task['taskID'];?>">
                    <input type="hidden" name="userID" value="<?=$userID;?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
            <td>
                <form action="index.php" method="POST">
                    <input type="hidden" name="action" value="show_edit_form">
                    <input type="hidden" name="taskID" value="<?=$task['taskID'];?>">
                    <input type="submit" value="Edit">
                </form>
            </td>
        </tr>
        
        <?php endforeach;?>
    </table>
</div>
<form action="index.php" method="GET" >
    <input type="hidden" name="action" value="show_add_form">
    <input type="hidden" name="userID" value="<?=$userID;?>">
    <input type="submit" value="Add task">
</form>
