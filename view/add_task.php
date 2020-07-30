<?php
   
    $userID = $_GET['userID'];
    $username = get_username($userID);
    ?>
    <form action="add.php" method="post">
        <label>UserID: <?=$userID?></label>
        <input type="hidden" name="userID" value="<?=$userID;?>"><br>
        <label>Username: <?=$username?></label>
        <input type="hidden" name="username" value="<?=$username;?>"><br>
        <input type="input" name="task"><br>
        <textarea cols="50" rols="3" name="note"></textarea><br>
        <input type="submit" value="Add task">
    </form>
