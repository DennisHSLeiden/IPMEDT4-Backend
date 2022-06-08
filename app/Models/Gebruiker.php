<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    use HasFactory;

    public function AllRoutes(){
        return $this->hasMany('\App\Models\Routes', 'creatorID', 'id')
    }
}
