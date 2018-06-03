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
       
        
             $this->load->view('referent/ConnexionReferent');
           
           
    }
    public function validation(){
       
   /*   pour vous permettre la connexion en tant que referent      
    $long = strlen($_POST['psw'] );
    
    $password = $long . $_POST['psw'] ;
    $pass = hash('sha512', $password); */

    $pass=$_POST['psw'] ;
         
    $data=array(
            "mail" => htmlspecialchars($_POST['mail']),
            "mdp" => $pass,
        );
        $query = $this->Referent_model->validAccess($data);
       
        if (empty($query)){
            redirect('Referent/connexion');
        }
        else {
          
            $ref=$_POST['mail'];
            $_crypted=$this->encryption->encrypt($ref);
            set_cookie('loginRef',$_crypted,3600);
             $this->load->view('referent/InformationsClient');
        }
        
    }
    public function monProfil(){
       
           
        if( get_cookie('loginRef')==''){
        
             redirect('Referent/connexion');
           
           
    } else {
            $_decrypted=$this->encryption->decrypt(get_cookie('loginRef'));
            $data['referent']=$this->Referent_model->infosRef($_decrypted);
            
            $this->load->view('referent/monprofilRef',$data);
    }
    }
    public function mesContacts(){
       
           
        if( get_cookie('loginRef')==''){
        
             redirect('Referent/connexion');
           
           
    } else {
            $_decrypted=$this->encryption->decrypt(get_cookie('loginRef'));
            $data['membres']=$this->Lier_model->AllCientsByRef($_decrypted);
            
            $this->load->view('referent/listContacts',$data);
    }
    }
        
    public function saveUpdates(){ // Modifier son profils
          
            $logref=$this->encryption->decrypt(get_cookie('loginRef'));
            
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
            
             $this->form_validation->set_rules('mail','Mail','min_length[7]|max_length[30]|valid_email|is_unique[.email]',
                   array(
                    'is_unique' => "Un compte est déja associé à cette adresse mail",
                    'min_length' => "Format adresse mail invalide"  )
                   );
           
            if ($this->form_validation->run() == TRUE){
             
                $data=array(
                        
                        "nomRef"=> htmlspecialchars($_POST['Nom']),
                        "prenomRef"=> htmlspecialchars($_POST['Prenom']),
                        "rueRef" => htmlspecialchars($_POST['rue']),
                        "villeRef"=> htmlspecialchars($_POST['ville']),
                        "CPRef"=> htmlspecialchars($_POST['cp']),
                        "ddnRef" => htmlspecialchars($_POST['ddn']),
                        "mailRef"=> htmlspecialchars($_POST['mail']),
                        "numeroTel" => htmlspecialchars($_POST['num']),
                        );
                $this->db->where('mailRef', $logref);
                $this->Referent_model->update('Referent',$data);
               
            }
            
             redirect('Referent/monProfil');}
            
}
           
        
    