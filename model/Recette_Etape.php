<?php
require_once('Crud.php');

class Recette_Etape extends Crud{

    public $table = 'Recette_Etape';
    public $primaryKey = 'id';

    public $fillable = [
        'recette_id',
        'etape_id',
        'ordre',

    ];

}


?>