<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lier_model extends CI_Model{
    
     protected $table ='Lier';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function addRelation($idref , $idcli) {
        
  
 	
                                }





    public function AllClientByRef($idref) {
        
        $list = $this->db->select('nom_client','prenom_client','rue_client','ville_client','CP_client')
                        ->from($this->table)
                        ->where('idRef','$idref')
                        ->get()
                        ->result();
        return $list;
    }

      public function getId($mail) {
        
        $result = $this->db->select('idRef')
                        ->from($this->table)
                        ->where('mailRef','$mail')
                        ->get()
                        ->result();
        return $result;
    }


}