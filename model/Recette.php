<?php
require_once('Crud.php');

class Recette extends Crud{

    public $table = 'Recette';
    public $primaryKey = 'id';

    public $fillable = [
        'id',
        'nom',
        'description',
        'temps_preparation',
        'temps_cuisson',
        'nombre_de_portions',
        'Categorie_id'

    ];

}


?>