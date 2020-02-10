<?php 

namespace Controllers;

class Forminscription extends Controller {

    protected $modelName = \Models\Forminscription::class; 


    public function index()
    {
        // $forms = $this->model;
        // var_dump($forms);
        // die();
        /**
         * 3. Affichage
         */
        $pageTitle = "Connexion";
        
        \Renderer::render('articles/forminscription', compact('pageTitle')); // Appel méthode static de la classe Renderer à la racine avec \Renderer car sinon il va chercher dans les Models la classe Renderer
        // Je transmet les variables $pageTitle et $articles sous forme de tableaux associatifs
        // qui seront extraits dans la class Renderer pour les rendre visibles dans index.html.php
    }
    
}