<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaptopModel extends Model
{
    use HasFactory;
    protected $table = 'laptops';
    protected $fillable = [
        'merk',
        'seri',
        'processor',
        'display',
        'ram',
        'internal',
        'battery',
        'harga'
    ];
}
