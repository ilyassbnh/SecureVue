<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // Indiquez les attributs qui peuvent être massivement assignés
    protected $fillable = ['name'];

    // Si vous utilisez des timestamps, vous pouvez définir cette propriété sur false
    public $timestamps = true; // ou false si vous n'utilisez pas les timestamps

    // Ajoutez d'autres méthodes ou relations si nécessaire
}
