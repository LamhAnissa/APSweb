<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Intervenir_model extends CI_Model{
    
     protected $table ='Intervenir';
    
     public function __construct() {
        parent::__construct();
        
    } 
    
    public function addIntrv ($idcli, $idmb, $date)
    {
        $date=SYSDATE
        return $this->db
        ->set($this->idClient,$idcli)
        ->set($this->idMb,$idmb)
        ->set($this->dateFistIntrv,$date)
        ->insert($this->$table);
        
    }

    public function getAllClientByMb ($membre)
    {
        return $this->db
        ->select(idClient)
        ->from($this->$table)
        ->where($this,;idMb,membre)
         ->get()
        ->result();
        
    }

    public function getAllMbByClient ($client)
    {
        return $this->db
        ->select(idRef)
        ->from($this->$table);
        ->where($this,;idClient,client)
         ->get();
        ->result();
        
    }

