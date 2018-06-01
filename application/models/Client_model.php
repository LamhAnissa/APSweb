<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Client_model extends CI_Model{
    

    protected $table ='Client';
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function addClient($data) {
        
  
 	$this->db->set('nom_Client', $data['Nom'])
 	->set('prenom_Client', $data['Prenom'])   
 	->set('rue_Client', $data['Rue'])
    ->set('ville_Client', $data['Ville'])
    ->set('CP_Client', $data['CP'])   
    ->set('ddn_Client', $data['ddn'])
    ->set('sousTutelle', $data['tutelle'])
    ->set('perteAutonomie', $data['perteA'])
    ->set('perteMemoire', $data['perteM'])      
    ->set('allergie', $data['allerg'])
    ->set('APA', $data['apa']) 
    ->set('logement', $data['log']) 
    ->set('infos_sup', $data['suppl'])       
 	->insert($this->table);
}




    public function validAcces($data) {
        
        $result = $this->db->select('mailClient,mdpClient')
                        ->from($this->table)
                        ->where('mailClient',$data["mailClienterent"])
                        ->where('mdpClient',$data["psw"])
                        ->get()
                        ->result();
        return $result;
    }

}