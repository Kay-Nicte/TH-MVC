<?php
include_once 'Model.php';

class Castellarnau extends Model{
	
    protected $taula ="castellarnau";

    // Afegir a la BD una nova frase
    public function add($frase) {

		$sql ="insert into castellarnau(frase) values 
				 (:frase)";
		$ordre = $this->bd->prepare($sql);	 
		$ordre->bindValue(':frase',$frase);
			$res = $ordre->execute(); 
        return $res;

    }

    // Actualitzar les dades d'una frase
    public function update($frase) {
		$sql ="update castellarnau set frase=:frase
				 where id=:codi";
		$ordre = $this->bd->prepare($sql);	 
		$ordre->bindValue(':frase',$frase);
	
		$res = $ordre->execute(); 
        return $res;

    }

}

?>