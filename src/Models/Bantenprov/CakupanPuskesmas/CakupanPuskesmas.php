<?php

namespace App\Models\Bantenprov\CakupanPuskesmas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CakupanPuskesmas extends Model 
{

    protected $table = 'cakupan_puskesmas';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

}