<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatoFormaçaoAcademicaAreaEstudoModel extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'candidato_formaçao_academica_area_estudo';
    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_candidato',
        'name',
    ];

    public function candidato()
    {
        return $this->hasOne('App\Models\api\CandidatoFormaçaoAcademicaAreaEstudoModel');
    }
}
