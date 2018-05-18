<?php

class model_stat extends CI_Model{
        
    public function getAllRegionDeSecteur(){
        $sql = $this->db->query("SELECT secteur.SEC_LIBELLE,count(REG_CODE) AS nbRegion from secteur,region where secteur.SEC_CODE = region.SEC_CODE GROUP BY secteur.SEC_CODE");
        return $sql->result();
    }
    
    public function getAllVisDeRegion(){
        $sql = $this->db->query("SELECT region.REG_NOM,count(travailler.VIS_MATRICULE) AS nbVis from visiteur,region, travailler where visiteur.VIS_MATRICULE = travailler.VIS_MATRICULE AND travailler.REG_CODE = region.REG_CODE GROUP BY travailler.REG_CODE");
        return $sql->result();
    }
}