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
     <th scope="col">Matricule</th>
     <th scope="col">Nom</th>
     <th scope="col">Prenom</th>
     <th scope="col">Sexe</th>
     <th scope="col">Telephone</th>
     <th scope="col">Date_de_naissance</th>
     <th scope="col">Lieu_naiss</th>
     <th scope="col">Email</th>
     <th scope="col">Lien Photo</th>
     <th scope="col">Actions</th>

   </tr>
 </thead>
       <tbody>
         <?php
         foreach ($Matiers as $datas) {
           $i=1;
           ?>
         <tr>
           <td><?php echo $i; ?></td>
           <td><?php echo $datas['Matricule']; ?></td>
           <td><?php echo $datas['Nom']; ?></td>
           <td><?php echo $datas['Prenom']; ?></td>
           <td><?php echo $datas['Sexe']; ?></td>
           <td><?php echo $datas['Telephone']; ?></td>
           <td><?php echo $datas['Date_de_naissance']; ?></td>
           <td><?php echo $datas['Lieu_naiss']; ?></td>
           <td><?php echo $datas['Photo']; ?></td>
           <td><?php echo $datas['Total']; ?></td>
           <td>
             <font color="green">
               <a href="#"><span class="glyphicon glyphicon-refresh text-black"></span>|</a>
             </font>
              <a href="<?php //echo site_url("UsersController\delete?id1='.$datas['id'].';"); ?>">
                <span class="glyphicon glyphicon-trash text-danger"></span>|</a>
              <font color="green">
                <a href="<?php //echo site_url("UsersController\Modifier?id1=$datas['id']"); ?>">
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
