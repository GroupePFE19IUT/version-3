<?php
  class PresenceModele extends CI_Model
  {

  public  function __construct()
    {
      parent::__construct();
      $this->load->database("db");
    }
    public  function  insertion($data){
      $this->db->insert('Normale', $data);
      $this->db->reset_query();
    }


    public function ListeEtudiants()
    {
      $query  = $this->db->select('Matricule')
                            ->from('Etudiant')
                            ->where("status= actif")
                            ->get();
                      return $query->result_array();
    }
    public function info($et)
    {
      $query  = $this->db->select('*')
                            ->from('Etudiant,Option,Departement')
                            ->where("Status='actif' and StatutOpt = 'actif' and statusDep = 'actif' and Matricule = $et")
                            ->get();
                      return $query->result_array();
    }

    public function ListeMatieres()
    {
      $query  = $this->db->select(' DISTINCT(CodeM)')
                            ->from('Presence')
                            ->where("StatutP= 'actif'")
                            ->get();
                      return $query->result_array();
    }


    public function NombreFoisProgrammer($Matiere)
    {
      $query  = $this->db->select('count( DISTINCT(Presence.DateP)) as nbb')
                            ->from('Presence')
                            ->where("StatutP= 'actif' and Presence.CodeM = $Matiere")
                            ->get();
                      return $query->result_array();
    }

    public function NombreDeParticipation($Matiere,$Etudiant)
    {
      $query  = $this->db->select('count(Matricule_etudiant) as nb')
                            ->from('Presence')
                            ->where("statutP= 'actif' and Presence.CodeM = $Matiere and Matricule_etudiant=$Etudiant")
                            ->get();
                      return $query->result_array();
    }

    public  function  insertioncc($tab){
      $this->db->insert('CC', $tab);
      $this->db->reset_query();
    }

    public function NombreMatieres()
    {
      $query  = $this->db->select('count( DISTINCT(Presence.CodeM)) as NombreMatieres')
                            ->from('Presence')
                            ->where("StatutP= 'actif'")
                            ->get();
                      return $query->result_array();
    }
    public function ListeEtudiantCc()
    {
      $query  = $this->db->select('DISTINCT(Matricule_etudiant)')
                            ->from('CC')
                            ->where("Statutcc= 'actif'")
                            ->get();
                      return $query->result_array();
    }

    public function NombreDeFoisTableCC($et)
    {
      $query  = $this->db->select('count(Matricule_etudiant) as nombredefoi')
                            ->from('CC')
                            ->where("Statutcc= 'actif' and Matricule_etudiant = $et")
                            ->get();
                      return $query->result_array();
    }



    public function Normale($id,$tab)
    {
      // code...de  mise  a jour  personnel
      $query  = $this->db->where('id',$id)
                          ->update('personnel',$tab);
                $this->db->reset_query();
                return  $query;
    }
  }


 ?>
