<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Intervenir extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 

    public function listIntervenant(){
       
           
        if( get_cookie('identityRef')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityRef'));
            $data['membre']=$this->Lier_model->AllMbByClient($_decrypted);
           
            $this->load->view('referent/listContacts',$data);
    }

}

public function listClients(){
       
           
        if( get_cookie('identityMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityMb'));
            $data['client']=$this->Intervenir_model->AllClientByMb($_decrypted);
            

            $this->load->view('intervenir/listClients',$data);
    }
}}
