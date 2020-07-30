<p>Username</p>
<ul>
    <?php foreach($usernames as $username):?>
        <li>
            <a href="?userID=<?=$username['userID']?>">
                <?=$username['username'];?>
            </a>
        </li>
    <?php endforeach;?>
</ul>