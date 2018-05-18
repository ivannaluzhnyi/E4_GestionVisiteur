<?php

class model_visiteur extends CI_Model{
    public function getAllVisiteurs(){
        $sql = $this->db->query("select * from visiteur,labo, secteur where visiteur.SEC_CODE = secteur.SEC_CODE AND labo.LAB_CODE = visiteur.LAB_CODE");
       return $sql->result();
    }
    public function insertVisiteurs($data){
         $this->db->insert("visiteur",$data);
    }
    public function getVisById($mat){
        $sql = $this->db->query("select * from visiteur,labo, secteur where visiteur.SEC_CODE = secteur.SEC_CODE AND labo.LAB_CODE = visiteur.LAB_CODE AND VIS_MATRICULE='".$mat."'");
        return $sql->result();
    }
    
    public function getAllLabos(){
          $sql = $this->db->query("select * from labo");
       return $sql->result();
    }
    public function unMatricule($matricule) {
        $this->db->where('VIS_MATRICULE',$matricule);
        $query = $this->db->get('visiteur');
        return $query->result(); 
    }
    public function modifierVisiteur($hidden_id, $Nom,  $Prenom, $Adresse, $Cp, $Ville, $DateEmb, $CodeSecteur, $CodeLabo){
    $this->db->query("UPDATE `visiteur` SET `VIS_NOM`='".$Nom."', `Vis_PRENOM`='".$Prenom."', `VIS_ADRESSE`='".$Adresse."', `VIS_CP`='".$Cp."', `VIS_VILLE`='".$Ville."', `VIS_DATEEMBAUCHE`='".$DateEmb."', `SEC_CODE`='".$CodeSecteur."', `LAB_CODE`='".$CodeLabo."' WHERE `visiteur`.`VIS_MATRICULE` = '".$hidden_id."'");
  
    }
}