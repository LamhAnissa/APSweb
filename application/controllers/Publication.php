<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Publication extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 

    public function listPubli(){
       
           
        if( get_cookie('identityRef')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityRef'));
            $data=$this->Lier_model->AllClientByRef($_decrypted);
            $this->load->view('referent/listContacts',$data);
    }
