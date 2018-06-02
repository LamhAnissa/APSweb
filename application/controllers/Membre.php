<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Membre extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
       
    } 



      public function connexion(){
       
        
             $this->load->view('membre/ConnexionMembre');
           
           
    }

    public function validation(){
     
    $enplus = strlen($_POST['password'] );

  
    $password = $enplus . $_POST['password'] ;
    $pass = hash('sha512', $password);
      
    
    //ce qu'on va renvoyer en test     
    $data=array(
            "mail" => htmlspecialchars($_POST['mailito']),
            "mdp" => $pass,
        );
        $query = $this->Membre_model->validAccess($data);
       
        if (empty($query)){
            redirect('Membre/connexion');
        }
        else {
            $statut=$this->Membre_model->getStatut($_POST['mail']);
            $idmb=$this->Membre_model->getId($_POST['mail']);
            $_crypted=$this->encryption->encrypt($idref);
            set_cookie('identityMb',$_crypted,3600);
            set_cookie('statutMb',$statut,3600);
           
        
             if ($statut==1){

            $this->load->view('membre/Informations');
             }
             else{
            $this->load->view('membre/Informations1'); // pensez à changer le menu ...
        }}

        
    }


        public function Profil(){ // Affiche le profil type intervenant
       
       
           
        if( get_cookie('identityMb')==''){
        
             redirect('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityMb'));
            $data['membre']=$this->Membre_model->infosMb($_decrypted);
            
            $this->load->view('Membre/monprofil',$data);
    }
    }

   public function ProfilAdmin(){ // Affiche le profil type admin
       
           
        if( get_cookie('identityMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityMb'));
            $data['membre']=$this->Membre_model->infosMb($_decrypted);
            
            $this->load->view('Membre/monprofiladmin',$data);
    }
    }


        public function saveUpdates(){ // Modifier son profils


            $statut=$this->encryption->decrypt(get_cookie('statutMb'));
            $idmb=$this->encryption->decrypt(get_cookie('identityMb'));
            
            $this->form_validation->set_rules('Nom','Nom','max_length[30]',
                   array(
                    'max_length' => "Votre nom ne doit pas dépasser les 30 caractères" 
                   )
                   );
           $this->form_validation->set_rules('Prenom','Prenom','max_length[30]',
                   array(
                    'max_length' => "Votre prénom ne doit pas dépasser les 30 caractères" 
                   )
                   );

             $this->form_validation->set_rules('Secteur','Secteur','max_length[30]',
                   array(
                    'max_length' => "Le secteur d'activité ne doit pas dépasser 30 caractères" 
                   )
                   );
             $this->form_validation->set_rules('mail','Mail','min_length[7]|max_length[30]|valid_email|is_unique[.email]',
                   array(
                    'is_unique' => "Un compte est déja associé à cette adresse mail",
                    'min_length' => "Format adresse mail invalide" 
                    'max_length' => "Votre mail ne doit pas dépasser 30 caractères" 
                   )
                   );
           
            if ($this->form_validation->run() == TRUE){

             
                $data=array(
                        
                        "nom_mb"=> htmlspecialchars($_POST['Nom']),
                        "prenom_mb"=> htmlspecialchars($_POST['Prenom']),
                        "secteur_mb" => htmlspecialchars($_POST['Secteur']),
                        "ddn_mb"=> htmlspecialchars($_POST['ddn']),
                        "numTel_mb"=> htmlspecialchars($_POST['numtel']),
                        "mail_mb" => htmlspecialchars($_POST['mail']),
                        );
                $this->Membre_model->update($idmb,$data);
               
            }
            
            if ($statut==1){
             redirect('Membre/monProfilAdmin');}
            

            else { redirect('Membre/monProfil');}
            
        }
    


        public function allAdmin(){
       
           
        if( get_cookie('identityMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityMb'));
            $data['admins']=$this->Membre_model->getAdmins($_decrypted);
            $this->load->view('membre/listAdmins',$data);
    }}

        public function allPersons(){
       
           
        if( get_cookie('identityMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityMb'));
            $data['membres']=$this->Membre_model->allMembers($_decrypted);
            $data['clients']=$this->Client_model->allClients($_decrypted);
            $this->load->view('membre/listPersons',$data);
    }}


    public function mesPubli(){
       
           
        if( get_cookie('identityMb')==''){
        
             $this->load->view('Referent/connexion');
           
           
    } else {

            $_decrypted=$this->encryption->decrypt(get_cookie('identityMb'));
            $data['publications']=$this->Publication_model->allPubliByMb($_decrypted);
            $this->load->view('membre/mesPublications',$data);
    }}
}
