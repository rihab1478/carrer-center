<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utulisateur extends Model
{
    protected $table = 'utulisateur';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'email', 'cin', 'numero'];
    
}
