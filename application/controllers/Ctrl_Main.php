<?php

class Ctrl_Main extends CI_Controller {
        function __construct() { 
         parent::__construct(); 
         //$this->load->helper('url'); 
        // $this->load->database();
        $this->load->model("Model_visiteur");        
        $this->load->model("Model_region");        
        $this->load->model("Model_stat");
        } 
        
        public function index(){
            $data['lesRegions'] = $this->Model_region->getAllRegions();
            $data["lesSecteurs"] = $this->Model_region->getAllSecteurs();
            $data["lesLabos"] = $this->Model_visiteur->getAllLabos();
            $data["lesVisiteurs"] = $this->Model_visiteur->getAllVisiteurs();
            $data['regionDuSecteur'] = $this->Model_stat->getAllRegionDeSecteur();
            $data['visDeRegion'] = $this->Model_stat->getAllVisDeRegion();
            $this->load->view('v_main_page', $data);
        }
        
        public function modifirVisiteurPage(){
            $data["lesVisiteurs"] = $this->Model_visiteur->getAllVisiteurs();
            $this->load->view('v_mod_visiteur', $data);
        }
        
        public function modVisiteur(){
            $VIS_MATRICULE = $this->uri->segment(3);
            $data["unVis"] = $this->Model_visiteur->getVisById($VIS_MATRICULE);
            $data["lesSecteurs"] = $this->Model_region->getAllSecteurs();
            $data["lesLabos"] = $this->Model_visiteur->getAllLabos();
            $this->load->view("v_mod_visiteur_form.php",$data);
        }


        public function form_visiteur(){
            if($this->form_validation->run()==true)
              {
                  $this->index();
              }
              else{
                        $data=array(
                            'VIS_MATRICULE' =>$this->input->post('VIS_MATRICULE'),
                            'VIS_NOM' =>$this->input->post('VIS_NOM'),
                            'Vis_PRENOM' =>$this->input->post('Vis_PRENOM'),
                            'VIS_ADRESSE' =>$this->input->post('VIS_ADRESSE'),
                            'VIS_CP' =>$this->input->post('VIS_CP'),
                            'VIS_VILLE' =>$this->input->post('VIS_VILLE'),
                            'VIS_DATEEMBAUCHE' =>$this->input->post('VIS_DATEEMBAUCHE'),
                            'SEC_CODE' =>$this->input->post('SEC_CODE'),
                            'LAB_CODE' =>$this->input->post('LAB_CODE')
                        );
                  
                   if($this->input->post('modVisBtn'))
                    {
                        $this->Model_visiteur->modifierVisiteur($this->input->post('hidden_id'),$data['VIS_NOM'],$data['Vis_PRENOM'],$data['VIS_ADRESSE'],$data['VIS_CP'],$data['VIS_VILLE'],$data['VIS_DATEEMBAUCHE'],$data['SEC_CODE'],$data['LAB_CODE']);
                        $this->modifirVisiteurPage();
                    }
                            
                    if($this->input->post('newVisBtn')){                            
                        $this->Model_visiteur->insertVisiteurs($data);
                        $this->index();
                    }

              }  
        }
        
        
        public function form_region(){
            if($this->form_validation->run()==true)
              {
                  $this->index();
              }
              else{
                        $data=array(
                            'REG_CODE' =>$this->input->post('REG_CODE'),
                            'REG_NOM' =>$this->input->post('REG_NOM'),
                            'SEC_CODE' =>$this->input->post('SEC_CODE')
                        );
                  
                   if($this->input->post('modRegBtn'))
                    {
                       $this->Model_region->modifierRegion($this->input->post('hidden_id'),$data['REG_NOM'],$data['SEC_CODE']);
                        $this->modifirRegionPage();
                    }
                            
                    if($this->input->post('newRegBtn')){                            

                        $this->Model_region->insertRegion($data);
                        $this->index();
                    }

              }  
        }
        
        public function modifirRegionPage(){
            $data['lesRegions'] = $this->Model_region->getAllRegions();
            $this->load->view('v_mod_region', $data);
        }
        
        public function modRegion(){
            $REG_CODE = $this->uri->segment(3);
            $data["unReg"] = $this->Model_region->getRegById($REG_CODE);
            $data["lesSecteurs"] = $this->Model_region->getAllSecteurs();
            $this->load->view("v_mod_region_form.php",$data);
        }
        
        public function form_travailler(){
            if($this->form_validation->run()==true)
              {
                  $this->index();
              }
              else{
                        $data=array(
                            'VIS_MATRICULE' =>$this->input->post('VIS_MATRICULE'),
                            'JJMMAA' =>$this->input->post('JJMMAA'),                            
                            'REG_CODE' =>$this->input->post('REG_CODE'),
                            'TRA_ROLE' =>$this->input->post('TRA_ROLE')
                        );

                        $this->Model_region->insertRegion($data);
                        $this->index();

              }  
        }
        
        public function listTravailler(){
            $data['lesTravaillers'] = $this->Model_region->getAllTravails();
            $this->load->view('v_list_travailler',$data);
        }
        
     
}
