<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Person info</title>
  </head>
  <body>
    <h2>Person info</h2>
    <p>
      Post array:<br>
      <?php print_r($_POST); ?>
    </p>
    <p>
      <?php echo "First name is ".$_POST[fname]; ?>
    </p>
    <p>
      <?php echo "Last name is ".$_POST[lname]; ?>
    </p>

  </body>
</html>
