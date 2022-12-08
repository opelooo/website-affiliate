<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_detail extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nama_produk',
    //     'value',
    //     'sound_quality',
    //     'link',
    //     'harga',
    //     'exerpt',
    //     'review',
    //     'tipe_buds',
    //     'bluetooth_codec',
    //     'battery',
    //     'sound_tuning',
    //     'img'
    // ];
    protected $guarded = ['id'];
}
