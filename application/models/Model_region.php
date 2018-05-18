<?php

class model_region extends CI_Model{
    public function getAllRegions(){
        $sql = $this->db->query("select * from region, secteur where region.SEC_CODE = secteur.SEC_CODE");
        return $sql->result();
    }
    
    public function getRegById($id){
        $sql = $this->db->query("select * from region where REG_CODE='".$id."'");
       return $sql->result();   
    }
    public function insertRegion($data){
         $this->db->insert("region",$data);
    }    

        public function insertTravail($data){
         $this->db->insert("travailler",$data);
    }
    
    public function getAllSecteurs(){
          $sql = $this->db->query("select * from secteur");
       return $sql->result();
    }
       public function uneRegion($region) {
        $this->db->where('REG_CODE',$region);
        $query = $this->db->get('region');
        return $query->result();
       
    }
     public function modifierRegion($id,$nom, $sec){
        $this->db->query("UPDATE region SET `SEC_CODE` = '".$sec."', `REG_NOM` = '".$nom."' where `region`.`REG_CODE` = '".$id."'");
    }
    
    public function insererTravail($VIS_MATRICULE, $date, $REG_CODE, $TRA_ROLE){
        $this->db->query("INSERT INTO `travailler` (`VIS_MATRICULE`, `JJMMAA`, `REG_CODE`, `TRA_ROLE`) VALUES ('".$VIS_MATRICULE."', '".$date."', '".$REG_CODE."', '".$TRA_ROLE."')");
    }
    
    public function getAllTravails(){
        $sql = $this->db->query("select * from region, visiteur, travailler where region.REG_CODE = travailler.REG_CODE AND visiteur.VIS_MATRICULE = travailler.VIS_MATRICULE GROUP by REG_NOM");
        return $sql->result();
    }
}