<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $primaryKey = 'idPasien';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "pasien";
    protected $fillable=['idPasien','noDaftar','nmPasien','tmptLahir','tgl_lahir','jk','almtPasien'];

}
