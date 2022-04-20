<!DOCTYPE html>
<!--This is loaded from the "m_template.php" object-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="views/style.css">
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <div id="content">
      <!-- Alerts -->
      <?php
        $alerts = $this->getAlerts();
        if ($alerts != '') {
          echo '<ul class="alerts">' . $alerts . '</ul>';
        }
      ?>
      <!-- Form -->
      <form class="" action="" method="post">

        <!-- Username -->
        <label>Username: *
          <input type="text" name="username" value="<?php echo $this->getData('input_user') ?>">
        </label>
        <div class="error"><?php echo $this->getData('error_user'); ?></div>
        <br><br><br><br>
        <!-- Password -->
        <label>Password: *
          <input type="password" name="password" value="<?php echo $this->getData('input_pass') ?>">
        </label>
        <div class="error"><?php echo $this->getData('error_pass') ?></div>
        <br><br><br>
        <p class="required">* required</p>
        <br>
        <input type="submit" class="submit" name="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
