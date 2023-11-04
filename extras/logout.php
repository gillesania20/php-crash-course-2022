<?php
    session_start();
    session_destroy();
    header('Location: /php-crash-course-2022/13_sessions.php');
?>