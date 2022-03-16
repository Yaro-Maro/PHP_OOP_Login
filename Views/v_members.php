<!DOCTYPE html>
<!--This is loaded from the "m_template.php" object-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="views/style.css">
    <title>Members</title>
  </head>
  <body>
    <h1>Members</h1>
    <div id="content">
      <?php
        $alerts = $this->getAlerts();
        if ($alerts != '') { echo '<ul class="alerts"' . $alerts . '</ul>';}
      ?>

      <p>You have logged in successfully!</p>

      <p><a href="logout.php">Log Out</a></p>



    </div>
  </body>
</html>
