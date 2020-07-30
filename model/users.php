<?php
    function get_users(){
        global $db;
        $query = "select * from users";
        $users = $db->query($query);
        return $users;
    }
    
    function get_username($userID){
        global $db;
        $query="select * from users where userID=$userID";
        $username = $db->query($query);
        $username =$username->fetch();
        return $username['username'];
    }
    
    function delete_user($userID){
        global $db;
        $query="delete from users where userID=$userID";
        $db->exec($query);
    }
    
    function edit_user_info($userID, $username){
        global $db;
        $query = "update users set username='$username' where userid=$userID";
        $db->exec();
    }
    function get_userID_from_url(){
    
    }
    function add_user($username){
        global $db;
        $query="insert into users(username) values(:username)";
        $statement = $db->prepare($query);
        $statement = bindValue(':username',$username);
        $statement->execute();
        $statement->closeCursor();
    }