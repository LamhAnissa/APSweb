<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Referent_model extends CI_Model{

    protected $table ='Referent';
    
     public function __construct() {
        parent::__construct();
  
    
    }
    public function addRef($data) {
        
  
 	$this->db->set('nomRef', $data['Nom'])
 	->set('prenomRef', $data['Prenom'])   
 	->set('rueRef', $data['Rue'])
    ->set('villeRef', $data['Ville'])
    ->set('CPRef', $data['CP'])   
    ->set('ddnRef', $data['ddn'])
    ->set('numTel', $data['numTel'])
    ->set('mailRef', $data['Mail'])   
    ->set('mdpRef', $data['psw'])
 	->insert($this->table);
}



    public function validAccess($data) {
        
        $result = $this->db
                        ->select('mailRef','mdpRef')
                        ->from($this->table)
                        ->where('mailRef',$data['mail'])
                        ->where('mdpRef',$data['mdp'])
                        ->get()
                        ->result();
        return $result;
    }

    public function getStatut($ref) {
        
        $result = $this->db->select('statut')
                        ->from($this->table)
                        ->where('mailRef','$ref')
                        ->get()
                        ->result();
        return $result;
    }

      public function getId($mail) {
        
        $result = $this->db->select('idRef')
                        ->from($this->table)
                        ->where('mailRef','$mail')
                        ->get()
                        ->result();
        return $result;
    }


      public function  infosRef($mail) {
        
        $result = $this->db->select('*')
                        ->from($this->table)
                        ->where('mailRef','$mail')
                        ->get()
                        ->result();
        return $result;
    }


}