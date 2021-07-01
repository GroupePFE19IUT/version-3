<?php

  class PresenceControler extends CI_Controller//class nom du controller qui extend les proprietes de CI_Controller
  {

  private $nombrelimite = 3;
  public  function __construct()
    {
      parent::__construct();
      $this->load->model('PresenceModele');// chargement du modele
    }

    public function index()// fonction qui est premierement appeller pour charger le modele la views modele
    {
      $data['titre'] = "Presence";
      $nombrefoisprogrammer;
      $data['titre'] = "Presence";// definition du titre de la page dans une vairiable elle sera esploiter plus tard
     /* appel du modele, la fonction pour selectionner les etudiants  et les matierers de la BD */
      $etudiants = $this->PresenceModele->ListeEtudiants();
      $Matieres = $this->PresenceModele->ListeMatieres();
      //var_dump($Matieres);
      //var_dump($etudiants);


      foreach ($Matieres as $Matiere) {
          /*on compte le nombre de fois qu'une matieres a ete programmer */
          /*on recupere l'intance de la matiere en cour*/
          $a =$Matiere['CodeM'];
          $nombrefoisprogrammer = $this->PresenceModele->NombreFoisProgrammer($a);
          $nbrpro=$nombrefoisprogrammer[0];

          $nombreMatiereprogrammer = $nbrpro['nbb'];
          //var_dump($nombreMatiereprogrammer);

          /* une fois le nombre de fois compter pour la matiere en cour faut compte le nombre de fois que l'etudiant a participer*/
              foreach ($etudiants as $Etudiant) {
                $et = $Etudiant['Matricule'];

              $nombredeparticipation = $this->PresenceModele->NombreDeParticipation($a,$et);

              $nbrp=$nombredeparticipation[0];
              $nombreetudiantparticipation = $nbrp['nb'];
              //var_dump($nombreetudiantparticipation);



              /* ici on comparer le nombre de fois qu'un etudiant a participer a la matiere programmer premierement si le nombre de fois participer nest pas
              inferieure au nombre de fois programmer ou si le nombre de fois programmer moin le nombre de participation - le nombre de programmation sois inferieure
              au nombre limite d'heure d'absence*/
              if(($nombreetudiantparticipation == $nombreMatiereprogrammer) and ($nombreMatiereprogrammer - $nombreetudiantparticipation) < $this->nombrelimite)
              {
                  /*on l'ajoute a la liste des etudiants pouvant participer au cc pour la matierer */
                  $tabb = array('Matricule_etudiant' =>$et ,
                                'CodeM' =>$a);

                    $req = $this->PresenceModele->insertioncc($tabb);

              }
          }
      }
      /*puis on compte le nombre de matieres pour savoir si un etudiant est eligible a la session normale
      si le nombre de matiere est egale au nombre de fois qu'un matricule apparrair dans la table cc alors il
       est AUTORISER a participer a la session
      normale*/
      /* etape 1 on compte le nombre de matiers */
      $nombrematieres1 = $this->PresenceModele->NombreMatieres();
      //var_dump($nombrematieres1);

      $nombrematierersextrait = $nombrematieres1[0];

       /*etape 2 on liste les etudiants de la table cc */
       $listeetudiantcc = $this->PresenceModele->ListeEtudiantCc();
       //var_dump($listeetudiantcc);
       /* pour chaque etudiant on vas compter le nombre de fois qu'il apparrair dans la table CC*/
       foreach ($listeetudiantcc as $ett) {
       /* on recuperer le matricule en cour */

       $etu = $ett['Matricule_etudiant'];

           $nombredefoistablecc = $this->PresenceModele->NombreDeFoisTableCC($etu);

$nombrfoiextrait = $nombredefoistablecc[0];
//$nombredefoistablecc == $nombrematieres1
            if ($nombrfoiextrait['nombredefoi'] === $nombrematierersextrait['NombreMatieres'])
                 {
                  // var_dump($etu);
                  /*on selection ces l'element concernant cette etudiant en base de donnees*/
                  $info = $this->PresenceModele->Info($etu);
                  //var_dump($info);
                $infoglobe = $info[0];
              //  var_dump($infoglobe['Matricule']);

                  /*puis on l'ajoute au etudiants abmisible a la session normale */
                  $Matricule = $infoglobe['Matricule'];
                  $Nom = $infoglobe['Nom'];
                  $prenom = $infoglobe['Prenom'];
                  $Date_de_naissance = $infoglobe['Date_de_naissance'];
                  $Lieu_naiss = $infoglobe['Lieu_naiss'];
                  $Email = $infoglobe['Email'];
                  $option  = $infoglobe['Code_Option'];
                  $departement = $infoglobe['Code_Derpartement'];
                  $tab = array(
                                "Matricule_etudiant" => $Matricule,
                                "Nom_etudiant"=>$Nom,
                                "prenom_etudiant"=>$prenom,
                                "Lieu_naiss"=>$Lieu_naiss,
                                "Date_de_naissance"=>$Date_de_naissance,
                                "Email"=>$Email,
                                "Option"=>$option,
                                "Departement"=>$departement
                              );
                              $requete =  $this->PresenceModele->insertion($tab);
            }

       }


       $data['titre'] = 'Presence';
      //$this->load->view('dashboard',$data);// chargement de la vues MatiersViews
    }

}
 ?>
