<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php
      echo $titre;
     ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

</head>
<?php
include_once("vendor/page/Liens.php");

include_once("vendor/page/Liens3.php");
 ?>
<body class="">
  <div class="wrapper ">
  <?php
    include('gauche.php');
   ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <?php
              include_once("Programmation.php");
             ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </body>
</html>
