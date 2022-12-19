<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_detail extends Model
{
    use HasFactory;
    const EXCERPT_LENGTH = 100;

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
    public function excerpt()
    {
        return Str::limit(strip_tags($this->review), Products_detail::EXCERPT_LENGTH);
    }
}

