<?php
require_once('Crud.php');

class Etapes extends Crud{

    public $table = 'Etapes';
    public $primaryKey = 'id';

    public $fillable = [
        'id',
        'numero_etape',
        'description',

    ];

}


?>