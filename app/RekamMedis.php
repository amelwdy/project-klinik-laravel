<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $primaryKey = 'noRm';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "rekam_medis";
    protected $fillable=['noRm','idPasien','kdObat','tensi','keluhan','diagnosa','jmlbyr'];

}
