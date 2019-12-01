 <?php
 
/**
 * Class Service qui correspond au service 
 * du collaborateur.
 *
 * @author obossard
 */
class Service {
 
    /**
     * Nom du service
     * @var string
     */
    private $libelle = '';
     
    /**
     * Localisation du service
     * @var string
     */
    private $localisation = '';
     
    /**
     * Constructeur
     * @param type $newLibelle
     */
    public function __construct($newLibelle) {
        $this->libelle = $newLibelle;
         
    }
     
    /**
     * Accesseur Libelle
     * @return string
     */
    public function getLibelle() {
        return $this->libelle;        
    }
     
    /**
     * Accesseur Libelle
     * @param string $newLibelle
     */
    public function setLibelle($newLibelle) {
        $this->libelle = $newLibelle;
    }
     
    /**
     * Accesseur Libelle
     * @return string
     */
    public function getLocalisation() {
        return $this->localisation;        
    }
     
    /**
     * Accesseur Libelle
     * @param string $newLocalisation
     */
    public function setLocalisation($newLocalisation) {
        $this->localisation = $newLocalisation;
    }
     
}