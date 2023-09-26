<?php

RequirePage::model('Recette');
RequirePage::model('Categorie');

class ControllerRecette extends Controller{

    public function index(){
        $recette = new Recette;
        $select = $recette->select();
      
        Twig::render('recette-index.php', ['recettes'=>$select]);
    }

    public function create(){
        $categorie = new Categorie;
        $selectCategorie = $categorie->select();

        Twig::render('recette-create.php', ['categories'=>$selectCategorie]);
    }

    public function store(){
        $recette = new Recette;
        $insert = $recette->insert($_POST);

        RequirePage::redirect('recette');
    }

    public function show($id){
        $recette = new Recette;
        $selectId = $recette->selectId($id);

        $categorie = new Categorie;
        $selectCategorie = $categorie->selectId($selectId['Categorie_id']);

        $categorie= $selectCategorie['categorie'];
        Twig::render('recette-show.php', ['recette' => $selectId, 'categorie' => $categorie]);
    }

    public function edit($id){
        $recette = new Recette;
        $selectId = $recette->selectId($id);
        $categorie = new Categorie;
        $selectCategorie = $categorie->select();

        Twig::render('recette-edit.php', ['recette' => $selectId, 'categories' => $selectCategorie]);
    }

    public function update(){
        $recette = new Recette;
        $update = $recette->update($_POST);
        if($update){
            RequirePage::redirect('recette');
        }else{
            print_r($update);
        }
    }

    public function destroy(){
        $recette = new Recette;
        $delete = $recette->delete($_POST['id']);

        if($delete){
            RequirePage::redirect('recette');
        }else{
            print_r($delete);
        }
    }
}

?>