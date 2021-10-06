<!DOCTYPE html>
<?php
$forename = "hans";
$valid = true;

// Hier passiert die Validierung
if(!isset($_GET['forename']) || !isset($_GET['surename'])) {
  $valid = false;
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="">
      <?php if($forename == ""): ?>
      <label for="forename">Forename</label>
      <input type="text" name="forename" id="forename" required minlength="2" value="<?= $forename ?>" />
      <?php else: ?>
      <p>Forename: <?= $forename ?>
      <?php endif; ?>
      <?php for($i = 0; $i < 10; $i++): ?>
      <label for="surname"><?= $i ?></label>
      <?php endfor; ?>
      <input type="text" name="surname" id="surname" required />
      <input type="submit" value="Sign up" />
    </form>
  </body>
</html>
