<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member_model extends CI_Model{
    
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
    ->set('numtel_mb', $data['Nom'])
    ->set('mail_mb', $data['mail'])
    ->set('mdp_mb', $data['mdp'])
 	->insert($this->table);
}
    public function verifmotdepasse($data) {
        
        $result = $this->db->select('mail_mb,mdp_mb')
                        ->from($this->table)
                        ->where('mail_mb',$data['mail'])
                        ->where('mdp_mb',$data["mdp"])
                        ->get()
                        ->result();
        return $result;
    }
}