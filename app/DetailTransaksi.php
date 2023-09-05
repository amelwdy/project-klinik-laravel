<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = "detail_trans";
    protected $fillable=['idTrans','noAkun','jmldb','jmlcr'];
}
