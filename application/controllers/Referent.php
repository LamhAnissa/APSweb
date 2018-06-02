<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Referent extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function index(){
       
      
           
             $this->load->view('Accueil');
           
           
    }

      public function connexion(){
       -
        
             $this->load->view('referent/ConnexionReferent');
           
           
    }


    public function validation(){
       
        $password=$_POST['psw'];
    
    //ce qu'on va renvoyer en test     
    $data=array(
            "mail" => htmlspecialchars($_POST['mail']),
            "mdp" => $password,
        );

        $query = $this->Referent_model->validAccess($data);
       
        if (empty($query)){
            redirect('Referent/connexion');

        }
        else {
            $idref=$this->Referent_model->getId($_POST['mail']);
            $_crypted=$this->encryption->encrypt($idref);
            set_cookie('identityRef',$_crypted,3600);
            redirect('Lier/listContactsbyRef');
        }
        
    }


}





























