<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use HasFactory;

    protected $fillable = ["Pseudo", "idRace", "idClasse", "idArmure", "idSpecialisation"];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
