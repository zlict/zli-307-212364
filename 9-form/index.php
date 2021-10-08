<?php
$forenameValue = $_POST['forename'] ?? false;
$discordValue = $_POST['discord'] ?? false;
$discordValueError = false;
$dateValue = $_POST['date'] ?? false;

if(!preg_match("/^(.+)#\d{4}$/", $discordValue)) {
  $discordValueError = "Gibt deinen richtigen Discord Tag an";
}

if(!$discordValueError) {
  // Formular ist Ordnung.
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      input {
        display: block;
      }

      span.error {
        color: red;
      }
    </style>
    <title>Document</title>
  </head>
  <body>
    <h1>LAN-Party Anmeldung</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
      <label for="forename">Vorname</label>
      <input type="text" name="forename" id="forename" required value="<?= $forenameValue ?>" />
      <label for="discord">Discord Tag</label>
      <?php if($discordValueError): ?>
        <span class="error"><?= $discordValueError ?></span>
      <?php endif; ?>
      <input type="text" name="discord" id="discord" required pattern="^(.+)#\d{4}$" value="<?= $discordValue ?>" />
      <fieldset>
        <legend>Wann soll die Party steigen?</legend>
        <label>
          09.10.2021
          <input type="checkbox" name="date[]" value="2021-10-09" />
        </label>
        <label>
          10.10.2021
          <input type="checkbox" name="date[]" value="2021-10-10" />
        </label>
        <label>
          11.10.2021
          <input type="checkbox" name="date[]" value="2021-10-11" />
        </label>
      </fieldset>
      <fieldset>
        <legend>Mit welchem Spiel starten wir den Abend?</legend>
        <select name="gameoftheevening" required>
          <option>Minecraft</option>
          <option>Lego Inidiana Jones</option>
          <option>Mario Super Smash Brothers</option>
        </select>
      </fieldset>
      <input type="submit" value="Anmelden" />
    </form>
  </body>
</html>