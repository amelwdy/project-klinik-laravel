<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $primaryKey = 'kdObat';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "obat";
    protected $fillable=['kdObat','nmObat','ktg','hrg','stok'];

}
