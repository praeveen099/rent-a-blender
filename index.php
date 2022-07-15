<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rent a Blender</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  <link rel ="stylesheet" href="css/style.css"> -->
  <link rel ="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="js/app.js"></script>
</head>
<body>
<?php include("heading.php");?>

  <main>
    <?php include("blendersData.php"); ?>


    <ul class= "blendersList">
      <?php
        foreach ($blenderArray as $blender)
        {
          echo "<li><a href='"
                . $blender->url .
                "' target='_blank'><img src="
                . $blender->imageUrl .
                " alt ='"
                . $blender->name .
                "'><p>"
                . $blender->name .
                "</p></a></li>";
        }
       ?>
    </ul>

  </main>
<?php include("footer.php");?>

</body>
</html>
