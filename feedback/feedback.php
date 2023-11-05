<?php include 'inc/header.php'; ?>
<?php
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
  <h2>Feedback</h2>

  <?php
    if(empty($feedback)){
      echo "<p>There is no feedback</p>";
    }
  ?>
  <?php
    foreach($feedback as $item){
      echo '
        <div class="card my-3 w-75">
          <div class="card-body text-center">
            ' . $item['body'] . '
          </div>
          <div class="text-secondary mt-2 text-center">
            By ' . $item['name'] . ' on ' . $item['date'] . '
          </div>
        </div>
      ';
    }
  ?>
<?php include 'inc/footer.php'; ?>