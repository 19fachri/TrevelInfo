<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaketLokasi extends Model
{
    protected $table = 'lokasi';
    protected $fillable = ['idPaket','idLokasi','hari','jam'];
}
