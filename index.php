<?php
$title = "Home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home - INFO 2300</title>

  <link rel="stylesheet" type="text/css" href="styles/site.css">
</head>

<body>
  <?php include("includes/header.php"); ?>

  <main>
    <h2>INFO/CS 2300; NBA 5301</h2>

    <p>This website is rendered server-side in PHP.</p>

    <!-- Note: Avoid outputting your PHP version in your production HTML.         -->
    <!--       Malicious actors may use the version to try and hack your website. -->
    <p>You're running PHP version: <strong><?php echo phpversion(); ?></strong>.</p>
  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>
