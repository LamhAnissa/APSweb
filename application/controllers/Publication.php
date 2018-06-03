<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Publication extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 

    public function listPubliByMb(){
       
           
        if( get_cookie('loginMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('loginMb'));
            $idMb=$this->Membre_model->getId($_decrypted);
            $data['publication']=$this->_model->AllPubliBy($idMb);
            $this->load->view('membre/mesPublications',$data);
}}

            public function publication  {


        if( get_cookie('loginMb')==''){
        
             $this->load->view('Membre/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('loginMb'));
            $data['idMb']=$this->Membre_model->getId($_decrypted);
            $this->Publication_model->publier($data);
            $info=$this->Client_model->getInfos($data['idClient']);
            $this->load->view('Client/ficheClient',$info);

}

    }

}