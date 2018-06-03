<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Client extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function allClients(){

    	if( get_cookie('loginMb')==''){
        
             $this->load->view('Membre/connexion');
           
           
    }else{

          $data['clients']=$this->Client_model->getClients();

 		  $this->load->view('client/listClients',$data);
    }
           
           
    }


    public function ficheClient(){

        if( get_cookie('loginMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    }else{

          $data=$this->Client_model->getInfos($_GET['idClient']);

          if ($data["sousTutelle"]==1){
                $data["sousTutelle"]="Oui"  } // Pour remplir la fiche client avec  
          else{$data["sousTutelle"]="Non"}

            if ($data["perteAutonomie"]==1){
                $data["perteAutonomie"]="Oui"  } // Pour remplir la fiche client avec  
          else{$data["perteAutonomie"]="Non"}
        
          }

            if ($data["perteMemoire"]==1){
                $data["perteMemoire"]="Oui"  } // Pour remplir la fiche client avec  
          else{$data["perteMemoire"]="Non"}
        
          }

            if ($data["APA"]==1){
                $data["APA"]="Oui"  } // Pour remplir la fiche client avec  
          else{$data["APA"]="Non"}
        
          }

          $this->load->view('client/ficheClient',$data);
    }
           
         


}