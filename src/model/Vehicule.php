<?php

namespace App\Model;
class Vehicule extends AbstractModel {

/**
    * @var int
    */
   private $id_vehicule;

   /**
    * @var string
    */
   private $marque;

   /**
    * @var string
    */
   private $modele;

   /**
    * @var string
    */
    private $couleur;
    
   /**
    * @var string
    */
   private $immatriculation;


    /**
     * @return INT
     */
    public function getId()
    {
        return $this->id_vehicule;
    }

    /**
     * @param INT $id_vehicule
     * @return self
     */
    public function setId(int $id_vehicule) : self
    {
        $this->id_vehicule = $id_vehicule;
        return $this;
    }


    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     * @return self
     */
    public function setMarque(string $marque) : self
    {
        $this->marque = $marque;
        return $this;
    }

    
    /**
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     * @return self
     */
    public function setModele(string $modele) : self
    {
        $this->modele = $modele;
        return $this;
    }


    /**
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     * @return self
     */
    public function setCouleur(string $couleur) : self
    {
        $this->couleur = $couleur;
        return $this;
    }


    /**
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param string $immatriculation
     * @return self
     */
    public function setImmatriculation(string $immatriculation) : self
    {
        $this->immatriculation = $immatriculation;
        return $this;
    }

    public static function findAll() {
        
        $bdd = self::getPdo();

        $query = "SELECT * FROM vehicule";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        // On prépare le tableau qui contiendra en format Object
    $dataAsObjects = [];

    // On fait un foreach de $data (données de la bdd) pour transformer chaque data en un object
    // puis on met l'object dans le tableau $dataAsObjects
    foreach($data as $d) {
        $dataAsObjects[] = self::toObject($d);
    }

    return $dataAsObjects;
    }

/**
    * Transforme un array de données de la table en un objet 
    */
public static function toObject($array) {

    $vehicule = new Vehicule;
    $vehicule->setId($array['id_vehicule']);
    $vehicule->setMarque($array['marque']);
    $vehicule->setModele($array['modele']);
    $vehicule->setCouleur($array['couleur']);
    $vehicule->setImmatriculation($array['immatriculation']);

    return $vehicule;
    }

    public function store() {

        $pdo = self::getPdo();
    
        $query = 'INSERT INTO vehicule(marque, modele, couleur, immatriculation) VALUES (:marque, :modele, :couleur, :immatriculation)';
    
        $response = $pdo->prepare($query);
        $response->execute([
            'marque' => $this->getMarque(),
            'modele' => $this->getModele(),
            'couleur' => $this->getCouleur(),
            'immatriculation' => $this->getImmatriculation(),

        ]);
    
        return true;
    }

    public function delete(){

    $pdo = self::getPdo();

    $request = "DELETE FROM vehicule WHERE ID = :id";
    $response = $pdo->prepare($request);
    $response->execute([
    'id' => $_GET['id']
    ]);  

    }
}