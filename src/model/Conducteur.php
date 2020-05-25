<?php

namespace App\Model;
class Conducteur extends AbstractModel {

/**
     * @var int
     */
    private $id_conducteur;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $nom;

/**
     * @return INT
     */
    public function getId()
    {
        return $this->id_conducteur;
    }

    /**
     * @param INT $id_conducteur
     * @return self
     */
    public function setId(int $id_conducteur) : self
    {
        $this->id_conducteur= $id_conducteur;
        return $this;
    }


    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return self
     */
    public function setPrenom(string $prenom) : self
    {
        $this->prenom = $prenom;
        return $this;
    }


    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return self
     */
    public function setNom(string $nom) : self
    {
        $this->nom = $nom;
        return $this;
    }

    public static function findAll() {
        
        $bdd = self::getPdo();

        $query = "SELECT * FROM conducteur";
        $response = $bdd->prepare($query);
        $response->execute();

        $data = $response->fetchAll();

        // On prépare le tableau en format Object
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

    $conducteur = new Conducteur;
    $conducteur->setId($array['id_conducteur']);
    $conducteur->setPrenom($array['prenom']);
    $conducteur->setNom($array['nom']);

    return $conducteur;

    } 


    public function store() {

        $pdo = self::getPdo();
    
        $query = 'INSERT INTO conducteur(prenom, nom) VALUES (:prenom, :nom)';
    
        $response = $pdo->prepare($query);
        $response->execute([
            'prenom' => $this->getPrenom(),
            'nom' => $this->getNom()
        ]);
    
        return true;
    }
        
}



