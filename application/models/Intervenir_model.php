<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Intervenir_model extends CI_Model{
    
     protected $table ='Intervenir';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function addIntrv ($idcli, $idmb, $date)
    {
        $date=SYSDATE;
        return $this->db
        ->set($this->idClient,$idcli)
        ->set($this->idMb,$idmb)
        ->set($this->dateFistIntrv,$date)
        ->insert($this->$table);
        
    }

    public function AllClientByMb ($membre)
    {
        return $this->db
        ->select('nom_client','prenom_client','rue_client','ville_client','CP_client')
        ->from($this->$table)
        ->join('Client', 'Client.idClient = Intervenir.idClient');
        ->where($this,idMb,$membre)
        ->get()
        ->result();
        
    }

    public function AllMbByClient ($client)
    {
        return $this->db
        ->select('nom_mb','prenom_mb','secteur_mb')
        ->from($this->$table)
        ->join('Membre', 'Membre.idmb = Intervenir.idMb');
        ->where($this,idClient,$client)
        ->get()
        ->result();
        
    }

}