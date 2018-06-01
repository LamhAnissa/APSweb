<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Referent extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 

    public function listContactsbyRef(){
       
           
        if( get_cookie('identityRef')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityRef'));
            $data=$this->Lier_model->AllClientByRef($_decrypted);
            $this->load->view('referent/listContacts',$data);
    }


































public function listContacts(){

      $data = array();
      if( get_cookie('nomref')==''){
          
             redirect('Referent/index');
              
    }
    else {
            $_decrypted=$this->encryption->decrypt(get_cookie('nomRef'));
          
            $this->load->view('user/monprofil',$data);
    }
            
        }
        $idOrganization = $_GET['idCollectif'];
        $data = array();
        $data['organization'] = $this->organization_model->getOrganizationById($idOrganization);
        $data['allPersonsOrganization']= $this->person_model->getPersonByOrganization($idOrganization);
        if (isset($_COOKIE['login']) && $this->member_model->checkCookieMember($_COOKIE['login'])) {
                $data['allPersons'] = $this->person_model->getAllPerson();
                $data['allCities'] = $this->city_model->getAllCity();
                $this->load->view('organization_view', $data);
        }
        else{
            $this->load->view('organization_visitor_view',$data);
        }
    }
    /**



}





