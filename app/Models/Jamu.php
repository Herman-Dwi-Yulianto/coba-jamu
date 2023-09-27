<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jamu extends Model
{
    protected $table = 'jamu';

    protected $fillable = [
        'nama',
        'bahan',
        'manfaat',
    ];
}

