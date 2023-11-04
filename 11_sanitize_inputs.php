<?php
    if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['name']); //prevents Cross-site scripting
        $age = htmlspecialchars($_POST['age']);
        echo $name;
        
        //$name = filter_input(INPUT_POST), 'name', FILTER_SANITIZE_SPECIAL_CHARS);

        //$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    }
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <div>
        <input type="submit" value="Submit" name="submit">
    </div>
</form>
