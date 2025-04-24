<?php
// namespace app\Models;
// use CodeIgniter\Model;
// class Abonne extends Model
// {
//     protected $table = 'abonne';
//     protected $primaryKey ='matricule_abonne';
//     protected $allowFields = ['matricule_abonne', 'nom_abonne'];
// }
// function getAbonneByMatricule($matricule)
// {
//     return $this->find($matricule);
// }
?>

namespace app\Models;

use CodeIgniter\Model;

class Abonne extends Model
{
    protected $table = 'abonne';
    protected $primaryKey = 'matricule_abonne';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
    'matricule_abonne',
    'nom_abonne',
    'date_naissance_abonne',
    'date_adhesion_abonne',
    'adresse_abonne',
    'CSP_abonne'
    ];

    protected bool $allowEmptyInsert = false;
    protected bool $updateOnlyChanged = true;

    function getAbonnematricule($matricule) {
        return $this->find($matricule);
    }
}
