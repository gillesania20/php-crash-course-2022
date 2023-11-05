<?php
    $message = 'Please choose a file';
    if(isset($_POST['submit'])){
        $allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];
        if(!empty($_FILES['upload']['name'])){
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/${file_name}";

            // Get file ext
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));
            
            // Validate file ext
            if(in_array($file_ext, $allowed_ext)){
                if($file_size <= 1000000){ // 1 MB
                    move_uploaded_file($file_tmp_name, $target_dir);
                    $message = 'File uploaded';
                }
            }else{
                $message = 'Invalid fite type';
            }
        }else{
            $message = 'Please choose a file';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Upload</title>
    </head>
    <body>
        <p><?php echo $message; ?></p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div>
                Select image to upload:
            </div>
            <div>
                <input type="file" name="upload">
            </div>
            <div>
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </body>
</html>