<?php
require_once 'class.service.php';
/**
 * Description of class
 *
 * @author obossard
 */
class Societe {
    /**
     * Nom de la societe
     * @var string
     */
    private $societe = '';
     
    private $listService = array();
 
    /**
     * Constructeur
     */
    public function __construct() {
         
    }
     
    /**
     * Accesseur Societe
     * @return string
     */
    public function getSociete() {
        return $this->societe;        
    }
     
    /**
     * Accesseur Societe
     * @param string $newSociete
     */
    public function setSociete($newSociete) {
        $this->societe = $newSociete;
    }
     
    /**
     * Permet d'ajouter un service au tableau des services
     * @param type $nom
     */
    public function addService($nom) {
        $service = new Service($nom);
        $this->listService[] = $service;
    }
     
    /**
     * Permet de récupérer la liste des services existants.
     */
    public function getListService(){
        // Put your code
    }
     
}