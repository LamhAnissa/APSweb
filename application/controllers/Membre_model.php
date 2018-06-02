<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Membre_model extends CI_Model{
    
     protected $table ='Membre';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function insert($data) {
        
  
    
 	$this->db->set('idmb', $data['id'])
    ->set('nom_mb', $data['Nom'])
 	->set('prenom_mb', $data['Prenom'])
 	->set('secteur_mb', $data['secteur'])
    ->set('ddn_mb', $data['ddn'])
    ->set('statut', $data['statut'])
    ->set('numtel_mb', $data['numtel'])
    ->set('mail_mb', $data['mail'])
    ->set('mdp_mb', $data['mdp'])
 	->insert($this->table);
}
    public function validAcces($data) {
        
        $result = $this->db->select('idMb')
                        ->from($this->table)
                        ->where('mail_mb',$data['mailito'])
                        ->where('mdp_mb',$data["password"])
                        ->get()
                        ->result();
        return $result;
    }


 public function getId($mail) {
        
        $result = $this->db->select('idMb')
                        ->from($this->table)
                        ->where('mail_mb',$data['mail'])
                        ->where('mdp_mb',$data["mdp"])
                        ->get()
                        ->result();
        return $result;
}

 public function infosMb($id) {
        
        $result = $this->db->select('*')
                        ->from($this->table)
                        ->where('idMb',$id)
                        ->get()
                        ->result();
                        
        return $result;
}



 public function getAdmins() {
        
        $result = $this->db->select('*')
                        ->from($this->table)
                        ->where('statut','1')
                        ->get()
                        ->result();
                        
        return $result;
}
}



