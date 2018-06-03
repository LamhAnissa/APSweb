<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Publication_model extends CI_Model{
    
     protected $table ='Publication';
    
     public function __construct() {
        parent::__construct();
        
    } 
        
    public function publier($data) {
        
  	$date=date("m.d.y");
  	$heure=date("H:i:s");
 	$this->db->set('datePubli', $date)
 	->set('heurePubli', $heure)   
 	->set('contenu', $data['message'])
    ->set('idClient', $data['idClient'])
    ->set('idMb', $data['idmb'])          
 	->insert($this->table);
}

public function AllPubliByClient($idclient) {
        
        $list = $this->db->select('*')
                        ->from($this->table)
                        ->where('idClient','idclient')
                        -> ORDER BY 'idPubli' DESC
                        ->get()
                        ->result();
        return $list;
    }
}

public function AllPubliBymb($idmb) {
        
        $list = $this->db->select('datePubli','heurePubli','contenu','nom_client', 'prenom_mb','nom_mb', 'prenom_client')
                        ->from($this->table)
                        ->join('Membre', 'Membre.idMb = Publication.idMb')
                        ->join('Intervenir', 'Intervenir.idMb = Membre.idMb')
                        ->join('Client', 'Client.idClient = Intervenir.idClient')
                        ->where('idMb','idmb')
                        -> ORDER BY 'idPubli' DESC
                        ->get()
                        ->result();
        return $list;
    }


    public function retirerpublication($idpubli) {
    $this->db->where('idPubli', $idpubli);
$this->db->delete('$this->table');
}
}