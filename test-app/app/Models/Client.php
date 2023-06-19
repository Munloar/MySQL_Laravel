<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients_2';

    public function nomDomaine(){
        return $this->belongsTo(NomsDeDomaine::class);
    }
}
