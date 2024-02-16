<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
  /**
   *@var string $table='etudiant';
  /**
   *@var array $fillable
   */
   protected $fillable =[
	'nom',
	'prenom',
	'sexe'
	];
  public function sexes(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Sexe::class, 'sexe');
    }
    use HasFactory;
}
