<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metodo extends Model
{
    protected $table ='metodo';

    protected $primaryKey = 'id_metodo';
    protected $fillable = ['Metodocol'];
    public $timestamps =false;
}
