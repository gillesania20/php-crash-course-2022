<?php include 'inc/header.php'; ?>
<?php
  $name = '';
  $email = '';
  $body = '';
  $nameErr = '';
  $emailErr = '';
  $bodyErr = '';

  if(isset($_POST['submit'])){
    // Validate name
    if(empty($_POST['name'])){
      $nameErr = 'Name is required';
    }else{
      $name = htmlspecialchars($_POST['name']);
    }

    // Validate email
    if(empty($_POST['email'])){
      $emailErr = 'Email is required';
    }else{
      $email = htmlspecialchars($_POST['email']);
    }

    // Validate body
    if(empty($_POST['body'])){
      $bodyErr = 'Feedback is required';
    }else{
      $body = htmlspecialchars($_POST['body']);
    }

    if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
      // Add to database
      $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
      if(mysqli_query($conn, $sql)){
        // Success
        header('Location: feedback.php');
      }else{
        // Error
        echo 'Error: ' . mysqli_error($conn);
      }
    }
  }
?>
  <img src="/php-crash-course-2022/feedback/img/logo.png" class="w-25 mb-3" alt="">
  <h2>Feedback</h2>
  <p class="lead text-center">Leave feedback for Traversy Media</p>
  <form action="" class="mt-4 w-75" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control <?php echo ($nameErr === '') ? null : 'is-invalid'; ?>" id="name" name="name" placeholder="Enter your name">
      <div class="text-danger"><?php echo $nameErr; ?></div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control <?php echo ($emailErr === '') ? null : 'is-invalid'; ?>" id="email" name="email" placeholder="Enter your email">
      <div class="text-danger"><?php echo $emailErr; ?></div>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Feedback</label>
      <textarea class="form-control <?php echo ($bodyErr === '') ? null : 'is-invalid'; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
      <div class="text-danger"><?php echo $bodyErr; ?></div>
    </div>
    <div class="mb-3">
      <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
  </form>
<?php include 'inc/footer.php'; ?>