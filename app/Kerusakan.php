<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    protected $table = 'kerusakan';
    protected $primaryKey ='kode_kerusakan';
    protected $fillable = ['nama_kerusakan','det_kerusakan','srn_kerusakan'];
    
}