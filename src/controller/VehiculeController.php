<?php

namespace App\Controller;

use App\Model\Vehicule;

class VehiculeController extends AbstractController {

    public static function index(){

        $vehicule= Vehicule::findAll();
    
        echo self::getTwig()->render('vehicule/index.html', [
            'vehicule' => $vehicule
        ]);
    
    }

    public static function show($id)
    {

    }

    public static function create() {

    }

    public static function new() {
        $vehicule = new Vehicule;
        $vehicule->setMarque($_POST['marque']);
        $vehicule->setModele($_POST['modele']);
        $vehicule->setCouleur($_POST['couleur']);
        $vehicule->setImmatriculation($_POST['immatriculation']);
        $vehicule->store();

        self::index();

    }

    public static function edit($id) {

        
    }

    public static function update() {

        
    }

    public static function delete($id) {
        
    }


}
?>