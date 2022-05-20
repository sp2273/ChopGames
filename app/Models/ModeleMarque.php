<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeleMarque extends Model
{

    protected $table = 'marque';
    protected $allowedFields = ['NOMARQUE ', 'NOM'];
    protected $primaryKey = 'NOMARQUE';

    public function retourner_marques($pNoMarque = false)
    {
        if ($pNoMarque === false) {
            return $this->orderBy('NOM', 'asc')
            ->findAll();
        }

        return $this->where(['NOMARQUE' => $pNoMarque])->first();
    }
    public function inserer_une_marque($pDonneesAInserer)
    {
        return $this->insert($pDonneesAInserer);
    }
}