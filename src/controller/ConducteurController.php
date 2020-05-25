<?php

namespace App\Controller;

use App\Model\Conducteur;

class ConducteurController extends AbstractController {

    public static function index(){
        $conducteur = Conducteur::findAll();
        echo self::getTwig()->render('conducteur/index.html', [
            'conducteur' => $conducteur
        ]);
    }

    public static function show($id){
        echo self::getTwig()->render('conducteur/show.html', [
            'idconducteur' => $id
        ]);
    }

    public static function create() {

    }

    public static function new() {
        $conducteur = new Conducteur;
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->setNom($_POST['nom']);
        $conducteur->store(); 

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