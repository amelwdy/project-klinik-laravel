<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPendapatan extends Model
{
    protected $table = "detail_trans";
    protected $fillable = ['idTrans','tgl_trans', 'noAkun','nmAkun','jmldb','jmlcr'];

}
