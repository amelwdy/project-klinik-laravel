<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey = 'idTrans';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "transaksi";
    protected $fillable=['idTrans','noRm','username','tgl_trans','statusPem'];

}
