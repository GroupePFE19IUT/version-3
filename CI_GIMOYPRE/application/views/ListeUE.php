<!DOCTYPE html>
<html lang="fr">
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
include_once("./vendor/page/Liens.php");
include_once("./vendor/page/Liens3.php");
 ?>
<body class="">
  <div class="wrapper ">
    <?php
    include_once("gauche.php");
     ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <br>
          <br>
          <table class="table table-hover table-dark" id="tab">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Code UE</th>
     <th scope="col">Intituler</th>
     <th scope="col">Code du parcours</th>
     <th scope="col">Type</th>
     <th scope="col">Actions</th>

   </tr>
 </thead>
       <tbody>
         <?php
         foreach ($Options as $datas) {
           $i=1;
           ?>
         <tr>
           <td><?php echo $i; ?></td>
           <td><?php echo $datas['Code_UE']; ?></td>
           <td><?php echo $datas['IntitulerUE']; ?></td>
           <td><?php echo $datas['Code_Option']; ?></td>
           <td><?php echo $datas['TypeUE']; ?></td>

           <td>
             <font color="green">
               <a href="#"><span class="glyphicon glyphicon-refresh text-black"></span>|</a>
             </font>
              <a href="<?php //echo site_url("UsersController\delete?id1='.$datas['Id_UE'].';"); ?>">
                <span class="glyphicon glyphicon-trash text-danger"></span>|</a>
              <font color="green">
                <a href="<?php //echo site_url("UsersController\Modifier?id1=$datas['Id_UE']"); ?>">
                  <span class="glyphicon glyphicon-edit text-black"></span>|</a>
              </font>|
          </td>
         </tr>
         <?php
         $i++;
             }
          ?>

       </tbody>
 </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </body>
</html>
