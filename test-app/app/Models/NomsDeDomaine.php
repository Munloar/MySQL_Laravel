<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomsDeDomaine extends Model
{
    public $table = 'noms_de_domaine_2';

    public function clients(){
        return $this->hasMany(Client::class);
    }
}
