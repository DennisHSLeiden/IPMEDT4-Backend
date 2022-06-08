<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soortenactiviteiten extends Model
{
    use HasFactory;

    public function AllActiviteiten(){
        return $this->hasMany('\App\Models\Activiteit', 'soort_activiteit', 'naam');
    }
}
