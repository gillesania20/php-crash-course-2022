<?php
    /* ----- Sessions ----- */
    
    /*
    Sessions are a way to store information (in variables) to be used across multiple pages.
    Unlike cookies, sessions are stored on the server.
    */
    session_start();
    //session_destroy(); // to destroy the session
    if(isset($_POST['submit'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if($username === 'user1' && $password === 'password'){
            $_SESSION['username'] = $username;
            header('Location: /php-crash-course-2022/extras/dashboard.php');
        }else{
            echo 'Incorrect Login';
        }
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <div>
        <input type="submit" value="Submit" name="submit">
    </div>
</form>