<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lier_model extends CI_Model{
    
     protected $table ='Lier';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function addRelation($idref , $idcli) {
        
        
        ->set('idClient',$idcli)
        ->set('idRef',$idref)
        ->insert($this->$table);
        
    }
 
    public function deleteRelation($idref , $idcli) {
       
        return $this->db
        ->where('idRef', '$idRef')
        ->where('idClient', '$idClient')
        ->delete($this->table);
    }
    

    public function AllClientByRef($mail) {
        
        $list = $this->db->select('idClient')
                        ->from($this->table)
                        ->where('mailRef','$mail')
                        ->get()
                        ->result();
        return $list;
    }

    public function AllRefByClient($idclient) {
        
        $list = $this->db->select('idRef')
                        ->from($this->table)
                        ->where('idClient','$idclient')
                        ->get()
                        ->result();
        return $list;
    }

}