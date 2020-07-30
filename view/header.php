<!DOCTYPE html>
<head>
    <title> Task Management</title>
</head>
<body>
    <nav>
        <ul class="">
            <li>
                <a class="<?php if($page =="index"){echo "active";}?>" href=".?action=home_page">Home</a>
            </li>
            <li>
                <a class="<?php if($page =="index"){echo "active";}?>" href="index.php?action=list_tasks">Tasks</a>
            </li>
            <li>
                <a class="<?php if($page =="index"){echo "active";}?>" href="?action=about">About Project</a>
            </li>
        </ul>
    </nav>
