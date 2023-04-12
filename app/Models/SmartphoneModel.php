<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartphoneModel extends Model
{
    use HasFactory;
    protected $table = 'smartphone';
    protected $fillable = [
        'merk',
        'seri',
        'processor',
        'display',
        'kamera',
        'battery',
        'harga'
    ];
}
