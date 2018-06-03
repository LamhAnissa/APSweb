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
            $statut=$this->Membre_model->getStatut($data['mail']);
            $mb=$data['mail'];
            $_crypted=$this->encryption->encrypt($mb);
            set_cookie('loginMb',$_crypted,3600);
            set_cookie('statutMb',$statut,3600);
           
        
             if ($statut==1){

            $this->load->view('membre/Informations');
             }
             else{
            $this->load->view('membre/Informations1'); // pensez à changer le menu ...
        }}

        
    }


        public function Profil(){ // Affiche le profil type intervenant
       
       
           
        if( get_cookie('loginMb')==''){
        
             redirect('Membre/connexion');
           
           
    } else {


        $login=$this->encryption->decrypt(get_cookie('loginMb'));
            $data['membre']=$this->Membre_model->infosMb($login);

        if ($statut==1){
            
            $this->load->view('Membre/monprofil',$data);
    } else {$this->load->view('Membre/monprofiladmin',$data);}
    }
}
   


        public function saveUpdates(){ // Modifier son profil


            $statut=$this->encryption->decrypt(get_cookie('statutMb'));
            $mailmb=$this->encryption->decrypt(get_cookie('loginMb'));
            
            $this->form_validation->set_rules('Nom','Nom','max_length[30]',
                   array(
                    'max_length' => "Votre nom ne doit pas dépasser les 30 caractères" 
                   )
                   );
        /*   $this->form_validation->set_rules('Prenom','Prenom','max_length[30]',
                   array(
                    'max_length' => "Votre prénom ne doit pas dépasser les 30 caractères" 
                   )
                   );  */

             $this->form_validation->set_rules('Secteur','Secteur','max_length[30]',
                   array(
                    'max_length' => "Le secteur d'activité ne doit pas dépasser 30 caractères" 
                   )
                   );
             $this->form_validation->set_rules('mail','Mail','min_length[7]|max_length[30]|valid_email|is_unique[.email]',
                   array(
                    'is_unique' => "Un compte est déja associé à cette adresse mail",
                    'min_length' => "Format adresse mail invalide" 
                  //  'max_length' => "Votre mail ne doit pas dépasser 30 caractères" 
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
                $this->db->where('mail_mb', $mailmb);
                $this->Membre_model->update($idmb,$data);
               
            }
            
            if ($statut==1){
             redirect('Membre/monProfilAdmin');}
            

            else { redirect('Membre/monProfil');}
            
        }
    


        public function allAdmin(){
       
           
        if( get_cookie('loginMb')==''){
        
             $this->load->view('Membre/connexion');
           
           
    } else {

            $mailmb=$this->encryption->decrypt(get_cookie('loginMb'));
            $data['admins']=$this->Membre_model->getAdmins();
            $this->load->view('membre/listAdmins',$data);
    }}

        public function allPersons(){
       
           
        if( get_cookie('loginMb')==''){
        
             $this->load->view('Membre/connexion');
           
           
    } else {

            $login=$this->encryption->decrypt(get_cookie('loginMb'));
            $data['membres']=$this->Membre_model->allMembers();
            $data['clients']=$this->Client_model->allClients();
            $this->load->view('membre/listPersons',$data);
    }}


    public function mesPubli(){
       
           
        if( get_cookie('loginMb')==''){
        
             $this->load->view('Membre/connexion');
           
           
    } else {

            $login=$this->encryption->decrypt(get_cookie('loginMb'));
            $data['publications']=$this->Publication_model->allPubliByMb($login);
            $this->load->view('membre/mesPublications',$data);
    }}

    
}


