<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoIdiomasModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_idiomas';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'tipo_idioma',
        'nivel',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoIdiomasModel');
    }
}
