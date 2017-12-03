<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $table ='noticias';
    protected $fillable = ['id_noticias','titulo','contenido','fecha'];
    public $timestamps =false;
}
