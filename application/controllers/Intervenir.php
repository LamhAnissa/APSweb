<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Intervenir extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 

    public function listIntervenant(){
       
           
        if( get_cookie('loginMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('loginMb'));

            $data['membre']=$this->Intervenir_model->AllMbByClient($_decrypted);
           
            $this->load->view('membre/listIntervenants',$data);
    }

} 

public function listClients(){
       
           
        if( get_cookie('loginMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('loginMb'));
            $data['client']=$this->Intervenir_model->AllClientByMb($_decrypted);
            

            $this->load->view('client/listClient',$data);
    }
}}
