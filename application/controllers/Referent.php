<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Referent extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 
    
    public function index(){
       
           
        if( get_cookie('identityRef')==''){
        
           
             $this->load->view('Accueil');
           
           
    }}

      public function connexion(){
       
           if( get_cookie('identityRef')==''){
        
             $this->load->view('referent/ConnexionReferent');
           
           
    }}


    public function validation(){
       
    
    // On choppe la longueur de la chaîne( sel dynamique)
    $enplus = strlen($_POST['psw'] );

    // On sale et on hash
    $password = $enplus . $_POST['psw'] ;
    $password = hash('sha512', $password);
    
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





























