<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $primaryKey = 'noAkun';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "akun";
    protected $fillable=['noAkun','nmAkun','klas','subklas'];
}
