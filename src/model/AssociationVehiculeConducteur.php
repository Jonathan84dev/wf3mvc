<?php

namespace App\Model;
class AssociationVehiculeConducteur extends AbstractModel {

/**
     * @var INT
     */
    private $id_association;

    /**
     * @var INT
     */
    private $id_vehicule;

    /**
     * @var INT
     */
    private $id_conducteur;


    /**
     * @return INT
     */
    public function getId()
    {
        return $this->id_association;
    }

    /**
     * @param INT $id_association
     * @return self
     */
    public function setId(int $id_association) : self
    {
        $this->id_association = $id_association;
        return $this;
    }


    /**
     * @return INT
     */
    public function getIdVehicule()
    {
        return $this->id_vehicule;
    }

    /**
     * @param INT $id_vehicule
     * @return self
     */
    public function setIdVehicule(int $id_vehicule) : self
    {
        $this->id_vehicule = $id_vehicule;
        return $this;
    }


    /**
     * @return INT
     */
    public function getIdConducteur()
    {
        return $this->id_conducteur;
    }

    /**
     * @param INT $id_conducteur
     * @return self
     */
    public function setIdConducteur(int $id_conducteur) : self
    {
        $this->id_conducteur = $id_conducteur;
        return $this;
    }







}
