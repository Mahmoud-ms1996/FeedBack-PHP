<?php include 'components/header.php' ?>

<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn,$sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <h2>Feedback</h2>
    <?php if(empty($feedback)): ?>
      <div class="alert alert-info mt-3 w-75 text-center" role="alert">
      <span style="font-size: 20px;"><b>There's no feedback!</b></span>
      </div>

    <?php endif; ?>

    <?php foreach ($feedback as $report): ?>
    <div class="card my-3">
      <div class="card-body">
        <?php echo $report['body'] ?>
        <div class="text-secondary mt-3 reports">
          <span>By: <?php echo $report['name']; ?></span>
          <span>On: <?php echo $report['date']; ?></span>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

<?php include 'components/footer.php' ?>